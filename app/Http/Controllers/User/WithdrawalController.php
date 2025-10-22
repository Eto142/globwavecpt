<?php

namespace App\Http\Controllers\User;

use App\Helpers\UserFinanceHelper;
use App\Http\Controllers\Controller;
use App\Models\Debitprofit;
use App\Models\Deposit;
use App\Models\Earning;
use App\Models\Plan;
use App\Models\Profit;
use App\Models\Refferal;
use App\Models\Transaction;
use App\Models\Withdrawal;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class WithdrawalController extends Controller
{
    //


       public function index()
    {

  // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
         return view('user.withdrawals', $data);
    }

    
 public function getUserWithdrawal(Request $request)
{
    $btcPrice = 0;
    $ethPrice = 0;

    try {
        $client = new Client();
        $response = $client->get('https://api.coingecko.com/api/v3/simple/price', [
            'query' => [
                'ids' => 'bitcoin,ethereum',
                'vs_currencies' => 'usd',
            ],
        ]);

        $prices = json_decode($response->getBody(), true);
        $btcPrice = $prices['bitcoin']['usd'] ?? 0;
        $ethPrice = $prices['ethereum']['usd'] ?? 0;
    } catch (RequestException $e) {
        Log::error('Failed to fetch cryptocurrency prices: ' . $e->getMessage());
    }

    // Retrieve user financial data
    $userId = Auth::id();

    $data = [
        'credit' => Transaction::where('user_id', $userId)->where('status', '1')->sum('credit'),
        'debit' => Transaction::where('user_id', $userId)->where('status', '1')->sum('debit'),
    ];

    // Calculate user balance
    $data['user_balance'] = $data['credit'] - $data['debit'];

    // Get withdrawal amount from request
    $data['amount'] = $request->input('amount', 0);

    // Convert balance and withdrawal amount to BTC & ETH
    $data['btc_balance'] = $btcPrice > 0 ? $data['user_balance'] / $btcPrice : 0;
    $data['btc_amount'] = $btcPrice > 0 ? $data['amount'] / $btcPrice : 0;
    $data['eth_amount'] = $ethPrice > 0 ? $data['amount'] / $ethPrice : 0;

    // Get withdrawal method from request
    $data['item'] = $request->input('item');

    // Return appropriate view based on withdrawal method
    return ($data['item'] == 'Bank') 
        ? view('user.withdraw-bank', $data) 
        : view('user.withdraw-btc', $data);
}






    public function getWithdrawal(Request $request)
    {

        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['investment'] = Investment::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['investment'] - $data['plan'];
        
        
                    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
                    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
                    $data['user_balance'] =  $data['credit'] - $data['debit'];

        $plan_amount = $request->input('amount');

        if ($data['user_balance'] <= '0') {
            return back()->with('status', 'Your Balance Is Insufficient');
        }

        if ($data['user_balance'] <= $plan_amount) {
            return back()->with('status', 'Your Balance Is Insufficient');
        }
        $method = $request->input('method');
        $data['method'] = $method;

        if ($method == 'Bank') {
            return view('user.withdraw-bank', $data);
        } else {
            return view('user.withdraw-funds', $data);
        }
    }


    public function ConfirmPassword(Request $request)
{
    // Validate the request data
    $request->validate([
        'cpassword' => 'required',
    ]);

    // Check if the provided password matches the authenticated user's password
    if (Hash::check($request->cpassword, auth()->user()->password)) {
        // Password is correct, redirect to the withdrawal page
        return redirect()->route('user.withdrawal')->with('status', 'Withdrawal in Progress!');
    } else {
        // Password doesn't match, redirect back with an error message
        return back()->with("error", "Password doesn't match!");
    }
}




public function bankUpdate(Request $request)
    {
        
        $user = Auth::user();
        $user->bankName = $request['bank_name'];
        $user->accountName = $request['account_name'];
        $user->accountNumber = $request['account_no'];
        $user->swiftCode = $request['swiftcode'];
        $user->bitcoinAddress = $request['btc_address'];
        $user->ethereumAddress = $request['eth_address'];
        $user->litecoinAddress = $request['ltc_address'];


        $user->save();
        return back()->with('status', 'Withdrawal Details Updated');
    }



    public function makeWithdrawal(Request $request)
{
    
    $method = $request->input('item');
    $data['method'] = $method;
    $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
    $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
    $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
    $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
    $data['profit'] = $data['addprofit'] - $data['debitprofit'];
    $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
    $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
    $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
    $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['plan'];
    
    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
    $data['user_balance'] =  $data['credit'] - $data['debit'];

 

    if ($data['user_balance'] <= '0') {
          return redirect()->route('user.withdrawal')
    ->with('status', 'Your Balance Is Insufficient');
    }

 

    $transaction_id = rand(76503737, 12344994);
    $with = new Withdrawal;
    $with->transaction_id = $transaction_id;
    $with->user_id = Auth::user()->id;
    $with->amount = $request['amount'];
    $with->status = 0;
    $with->mode = $request['mode'];
    $with->account_name = $request['account_name'];
    $with->account_number = $request['account_number'];
    $with->bank_name = $request['bank_name'];
    $with->bank_routing_number = $request['bank_routing_number'];
    $with->swift = $request['swift'];
    $with->bank_country = $request['bank_country'];
    $with->currency = $request['currency'];
    $with->zip = $request['zip'];
    $with->crypto_type = $request['crypto_type'];
    $with->wallet_address = $request['wallet_address'];
    $mode = $request->input('mode');
    $data['mode']=$mode;
    
    //   // Calculate BTC and ETH amounts
    // $with->btc_amount = $with->amount / $priceBTC;
    // $with->eth_amount = $with->amount / $priceETH;
       // Check if the withdrawal amount exceeds the user's balance
    if ($request['amount'] > $data['user_balance']) {
       return redirect()->route('user.withdrawal')
    ->with('error', 'Withdrawal amount exceeds available balance.');

    }
    $with->save();


    $transaction = new Transaction;
    $transaction->user_id = Auth::user()->id;
    $transaction->transaction_id = $transaction_id;
    $transaction->transaction_type = "Debit";
    $transaction->transaction = "debit";
    $transaction->credit = "0";
    $transaction->debit = $request['amount'];
    $transaction->status = 0;
    $transaction->save();
    
    
      // Prepare data to pass to the view
     $dataForView = [
        'withdrawal' => $with,
        'withdrawal_amount' => $request['amount'], // Pass withdrawal amount
        'mode' => $request->input('mode'), // Pass item
        'btcAmount' => $with->btc_amount,
        'ethAmount' => $with->eth_amount
    ];

    return view('user.withdraw-success', $dataForView);
}

}
