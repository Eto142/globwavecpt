@include('home.header')
    <!-- Hero Slider with Multiple Slides -->
    <section class="hero-slider">
        <!-- Slide 1: Customer Support -->
        <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1640340434855-6084b1f4901c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')">
            <div class="container">
                <div class="row align-items-center slider-content">
                    <div class="col-lg-6">
                        <h1 class="slide-h1">Highly Qualified Customer Support Department</h1>
                        <p class="slide-subtitle">
                            Boost your profits with the power of 100X leverage. Go Long/Short on a secure and ultra-fast platform.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('login') }}" class="btn btn-primary-custom">Login to Account</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-light-custom">Register Now</a>
                        </div>
                        <ul class="slider-features">
                            <li><i class="fas fa-check"></i> 24/7 Customer Support</li>
                            <li><i class="fas fa-check"></i> Advanced Trading Tools</li>
                            <li><i class="fas fa-check"></i> Secure & Regulated Platform</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget" style="height: 450px;"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "12M",
                                "showChart": true,
                                "locale": "en",
                                "width": "100%",
                                "height": "100%",
                                "largeChartUrl": "",
                                "isTransparent": true,
                                "plotLineColorGrowing": "rgba(82, 175, 238, 1)",
                                "plotLineColorFalling": "rgba(82, 175, 238, 1)",
                                "gridLineColor": "rgba(42, 46, 57, 1)",
                                "scaleFontColor": "rgba(120, 123, 134, 1)",
                                "belowLineFillColorGrowing": "rgba(82, 175, 238, 0.12)",
                                "belowLineFillColorFalling": "rgba(82, 175, 238, 0.12)",
                                "symbolActiveColor": "rgba(82, 175, 238, 0.12)",
                                "tabs": [
                                    {
                                        "title": "Indices",
                                        "symbols": [
                                            { "s": "FOREXCOM:SPXUSD", "d": "S&P 500" },
                                            { "s": "FOREXCOM:NSXUSD", "d": "Nasdaq 100" },
                                            { "s": "FOREXCOM:DJI", "d": "Dow 30" },
                                            { "s": "INDEX:NKY", "d": "Nikkei 225" },
                                            { "s": "INDEX:DEU30", "d": "DAX Index" },
                                            { "s": "FOREXCOM:UKXGBP", "d": "FTSE 100" }
                                        ]
                                    },
                                    {
                                        "title": "Commodities",
                                        "symbols": [
                                            { "s": "CME_MINI:ES1!", "d": "E-Mini S&P" },
                                            { "s": "CME:6E1!", "d": "Euro" },
                                            { "s": "COMEX:GC1!", "d": "Gold" },
                                            { "s": "NYMEX:CL1!", "d": "Crude Oil" },
                                            { "s": "NYMEX:NG1!", "d": "Natural Gas" },
                                            { "s": "CBOT:ZC1!", "d": "Corn" }
                                        ]
                                    },
                                    {
                                        "title": "Forex",
                                        "symbols": [
                                            { "s": "FX:EURUSD" },
                                            { "s": "FX:GBPUSD" },
                                            { "s": "FX:USDJPY" },
                                            { "s": "FX:USDCHF" },
                                            { "s": "FX:AUDUSD" },
                                            { "s": "FX:USDCAD" }
                                        ]
                                    }
                                ]
                            }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2: Reliable Trading -->
        <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')">
            <div class="container">
                <div class="row align-items-center slider-content">
                    <div class="col-lg-6">
                        <h1 class="slide-h1">Reliable, Simple and Innovative Trading</h1>
                        <p class="slide-subtitle">
                            Trade Cryptocurrencies, Stock indexes, Commodities and Forex with a single Forex-based platform.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#" class="btn btn-primary-custom">Start Trading Now</a>
                            <a href="#" class="btn btn-outline-light-custom">Learn More</a>
                        </div>
                        <ul class="slider-features">
                            <li><i class="fas fa-check"></i> 100+ Trading Instruments</li>
                            <li><i class="fas fa-check"></i> Low Spreads & Fast Execution</li>
                            <li><i class="fas fa-check"></i> Advanced Risk Management</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_crypto" style="height: 450px;"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                            new TradingView.widget(
                            {
                                "autosize": true,
                                "symbol": "BINANCE:BTCUSDT",
                                "interval": "D",
                                "timezone": "Etc/UTC",
                                "theme": "dark",
                                "style": "1",
                                "locale": "en",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "hide_top_toolbar": false,
                                "hide_legend": false,
                                "save_image": false,
                                "container_id": "tradingview_crypto"
                            }
                            );
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3: Low Fees -->
        <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1639762681485-074b7f938ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')">
            <div class="container">
                <div class="row align-items-center slider-content">
                    <div class="col-lg-6">
                        <h1 class="slide-h1">Premium Trading. Minimal Costs</h1>
                        <p class="slide-subtitle">
                            Find your trading opportunity in 3 easy steps with our low-fee structure and competitive spreads.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#" class="btn btn-primary-custom">Open Free Account</a>
                            <a href="#" class="btn btn-outline-light-custom">View Pricing</a>
                        </div>
                        <ul class="slider-features">
                            <li><i class="fas fa-check"></i> Open Account in 40 Seconds</li>
                            <li><i class="fas fa-check"></i> Deposit with 20+ Payment Methods</li>
                            <li><i class="fas fa-check"></i> Start Trading Immediately</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_forex" style="height: 450px;"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                            new TradingView.widget(
                            {
                                "autosize": true,
                                "symbol": "FX:EURUSD",
                                "interval": "D",
                                "timezone": "Etc/UTC",
                                "theme": "dark",
                                "style": "1",
                                "locale": "en",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "hide_top_toolbar": false,
                                "hide_legend": false,
                                "save_image": false,
                                "container_id": "tradingview_forex"
                            }
                            );
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">How It Works</h2>
            <p class="section-subtitle">Start trading in 3 simple steps with our user-friendly platform</p>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="how-it-work-card">
                        <div class="how-it-work-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h3 class="how-it-work-title">Create Account</h3>
                        <p>Open a real account and add funds. We work with more than 20 payment systems.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how-it-work-card">
                        <div class="how-it-work-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="how-it-work-title">Start Trading</h3>
                        <p>Trade any of 100 assets and stocks. Use technical analysis and trade the news.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how-it-work-card">
                        <div class="how-it-work-icon">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <h3 class="how-it-work-title">Withdraw Profits</h3>
                        <p>Get funds easily to your bank card or e-wallet. We take no commission.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section section-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title text-start">Advanced Trading Features</h2>
                    <p class="mb-4">
                        We provide fastest trading using modern technologies. No delays in order executions and most
                        accurate quotes. Our trading platform is available around the clock and on weekends.
                        Global Wave Capital customer service is available 24/7.
                    </p>
                    <ul class="features-list">
                        <li>Technical analysis tools: 4 chart types, 8 indicators, trend lines</li>
                        <li>Social trading: watch deals across the globe or trade with your friends</li>
                        <li>Over 100 assets including popular stocks</li>
                        <li>Advanced order types and risk management tools</li>
                        <li>Mobile trading app for iOS and Android</li>
                    </ul>
                    <a href="#" class="btn btn-primary-custom mt-3">Explore Features</a>
                </div>
                <div class="col-lg-6">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_advancedchart" style="height: 450px;"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                        new TradingView.widget(
                        {
                            "autosize": true,
                            "symbol": "BINANCE:ETHUSDT",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "hide_top_toolbar": false,
                            "hide_legend": false,
                            "save_image": false,
                            "container_id": "tradingview_advancedchart"
                        }
                        );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>

    <!-- Trading Instruments Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Trade Multiple Instruments</h2>
            <p class="section-subtitle">Get immediate access to cryptocurrencies, stock indices, commodities and forex with a single platform</p>
            
            <div class="market-table">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Instrument</th>
                            <th>Symbol</th>
                            <th>Price</th>
                            <th>Change</th>
                            <th>Leverage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fab fa-bitcoin text-warning me-2 fs-5"></i>
                                    Bitcoin
                                </div>
                            </td>
                            <td>BTC/USD</td>
                            <td>$45,230.50</td>
                            <td class="positive">+2.34%</td>
                            <td>100X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fab fa-ethereum text-primary me-2 fs-5"></i>
                                    Ethereum
                                </div>
                            </td>
                            <td>ETH/USD</td>
                            <td>$3,210.75</td>
                            <td class="positive">+1.67%</td>
                            <td>100X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-euro-sign text-info me-2 fs-5"></i>
                                    EUR/USD
                                </div>
                            </td>
                            <td>EUR/USD</td>
                            <td>1.0854</td>
                            <td class="negative">-0.23%</td>
                            <td>1000X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-chart-line text-success me-2 fs-5"></i>
                                    S&P 500
                                </div>
                            </td>
                            <td>SPX</td>
                            <td>4,530.20</td>
                            <td class="positive">+0.89%</td>
                            <td>100X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-gem text-warning me-2 fs-5"></i>
                                    Gold
                                </div>
                            </td>
                            <td>XAU/USD</td>
                            <td>$1,980.40</td>
                            <td class="positive">+0.56%</td>
                            <td>500X</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-light-custom">View All Instruments</a>
            </div>
        </div>
    </section>

    <!-- Account Plans Section -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title">Trading Account Plans</h2>
            <p class="section-subtitle">Choose the plan that fits your trading goals and investment strategy</p>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card">
                        <h3 class="plan-name">MINI PLAN</h3>
                        <div class="plan-price">$500</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">10% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $7,500</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card popular">
                        <h3 class="plan-name">SILVER PLAN</h3>
                        <div class="plan-price">$20,000</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">15% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $117,500</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card">
                        <h3 class="plan-name">GOLD PLAN</h3>
                        <div class="plan-price">$100,000</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">60% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $420,000</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card">
                        <h3 class="plan-name">DIAMOND PLAN</h3>
                        <div class="plan-price">$500,000</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">60% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $2,520,000</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">Happy investors sharing their experiences with Global Wave Capital</p>
            
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"I got my first investment profit of $15k. Big thanks to you guys at Global Wave Capital! The platform is intuitive and their support team is always available."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=1" alt="Robert Pope" class="testimonial-avatar">
                            Robert Pope
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Big shout out to you guys at Global Wave Capital. I just got my Bitcoin back after a trading error. I love you guys! The insurance policy really works."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=2" alt="Steve Walter" class="testimonial-avatar">
                            Steve Walter
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Thank you Global Wave Capital. I'm debt free. I have been able to repay my loan of $64,000! The Gold plan was the best investment decision I've made."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=3" alt="Veronica Keith" class="testimonial-avatar">
                            Veronica Keith
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Methods Section -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title">We Accept</h2>
            <p class="section-subtitle">Payment Methods for Deposit and withdrawal</p>
            
            <div class="text-center">
                <div class="payment-method">
                    <i class="fab fa-bitcoin fa-2x text-warning"></i>
                    <p class="mt-2 mb-0 text-dark">Bitcoin</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-ethereum fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark">Ethereum</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-visa fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark">Visa</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-mastercard fa-2x text-danger"></i>
                    <p class="mt-2 mb-0 text-dark">Mastercard</p>
                </div>
                <div class="payment-method">
                    <i class="fas fa-university fa-2x text-info"></i>
                    <p class="mt-2 mb-0 text-dark">Bank Transfer</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-paypal fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark">PayPal</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Forex Cross Rates Widget -->
    <section class="section">
        <div class="container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                {
                    "width": "100%",
                    "height": "400",
                    "currencies": [
                        "EUR",
                        "USD",
                        "JPY",
                        "GBP",
                        "CHF",
                        "AUD",
                        "CAD",
                        "NZD",
                        "CNY"
                    ],
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </section>
    </main>
@include('home.footer')