<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./commonStyle.css" />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/aa7454d09f.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div id="logo">
        <a href="./index.php">
          <img src="./img/TradeWhiz.png" alt="" />
        </a>
      </div>
      <ul class="nav" id="nav">
        <li class="nav-link"><a href="./index.php">Home</a></li>
        <li class="nav-link"><a href="./aboutus.php">About Us</a></li>
        <li class="nav-link"><a href="./Login.php">Login</a></li>
        <li class="sociallinkContainer">
          <img class="sociallink" src="./img/fabook-icon-white.svg" alt="" />
          <img class="sociallink" src="./img/twitter-icon-white.svg" alt="" />
          <img class="sociallink" src="./img/inkedin-icon-white.svg" alt="" />
          <img class="sociallink" src="./img/whatsapp-icon-white.svg" alt="" />
        </li>
      </ul>
      <div id="barContainer">
        <i id="bar" class="fa-solid fa-bars"></i>
      </div>
    </header>

    <!-- Hero page -->
    <section class="hero gridSection">
      <div class="sectionDesc">
        <h1 class="headline">
          Automate your Investment with
          <span class="cryptoText">TradeWhiz</span>
        </h1>
        <p class="sub-headline">
          A Smart tool to Help Traders maximize their profits
        </p>
        <div class="btnContainer">
          <button class="btn btn1">
            <a href="Signup.php">Get Started</a>
          </button>
          <!-- <button class="btn btn2">play video <i class="fa-solid fa-play"></i></button> -->
        </div>
      </div>
      <div class="sectionPic bouncepic" id="sectionPic">
        <img src="./img/Testing2.png" alt="" />
      </div>
    </section>

    <!-- Carousel -->
    <section>
      <div class="carouselContainer">
        <div class="eachCarousel eachCarouselBorder">
          <img src="./img/HDFC.jpg" alt="" />
          <article class="carouselDesc">
            <h1 class="carouselTitle">HDFC Bank</h1>
            <p class="carouselPara">
              HDFC Bank is one of India's leading private sector banks.
            </p>
            <div class="carouselPrice">
              <h3>1,550.05 INR</h3>
              <span class="rect"></span>
              <h3 class="carouselDiscount">+22.45</h3>
            </div>
            <button class="btn carouselBtn">Buy & Trade</button>
          </article>
        </div>

        <div class="eachCarousel">
          <img src="./img/ITC.png" alt="" />
          <article class="carouselDesc">
            <h1 class="carouselTitle">ITC</h1>
            <p class="carouselPara">
              ITC Limited is a diversified conglomerate in India.
            </p>
            <div class="carouselPrice">
              <h3>427.50 INR</h3>
              <span class="rect"></span>
              <h3 class="carouselDiscount">4.75%</h3>
            </div>
            <button class="btn carouselBtn">Buy & Trade</button>
          </article>
        </div>

        <div class="eachCarousel">
          <img src="./img/Reliance.jpg" alt="" />
          <article class="carouselDesc">
            <h1 class="carouselTitle">Reliance</h1>
            <p class="carouselPara">
              Reliance Industries Limited is a multinational conglomerate based
              in India.
            </p>
            <div class="carouselPrice">
              <h3>2,925.95 INR</h3>
              <span class="rect"></span>
              <h3 class="carouselDiscount">0.100%</h3>
            </div>
            <button class="btn carouselBtn">Buy & Trade</button>
          </article>
        </div>

        <div class="eachCarousel">
          <img src="./img/tata-motors.png" alt="" />
          <article class="carouselDesc">
            <h1 class="carouselTitle">Tata Motors</h1>
            <p class="carouselPara">
              Tata Motors Limited is an Indian multinational automotive
              manufacturing company.
            </p>
            <div class="carouselPrice">
              <h3>1,007.85 INR</h3>
              <span class="rect"></span>
              <h3 class="carouselDiscount">−3.75%</h3>
            </div>
            <button class="btn carouselBtn">Buy & Trade</button>
          </article>
        </div>

        <div class="eachCarousel">
          <img src="./img/Infosys.jpg" alt="" />
          <article class="carouselDesc">
            <h1 class="carouselTitle">Infosys</h1>
            <p class="carouselPara">
              Infosys Limited is an Indian multinational corporation that
              provides information technology, and business consulting services.
            </p>
            <div class="carouselPrice">
              <h3>1,480.40 INR</h3>
              <span class="rect"></span>
              <h3 class="carouselDiscount">−6.30%</h3>
            </div>
            <button class="btn carouselBtn">Buy & Trade</button>
          </article>
        </div>

        <div class="eachCarousel">
          <img src="./img/TCS.avif" alt="" />
          <article class="carouselDesc">
            <h1 class="carouselTitle">TCS</h1>
            <p class="carouselPara">
              Tata Consultancy Services (TCS) is an Indian multinational IT
              services and consulting company.
            </p>
            <div class="carouselPrice">
              <h3>3,983.00 INR</h3>
              <span class="rect"></span>
              <h3 class="carouselDiscount">−20.30%</h3>
            </div>
            <button class="btn carouselBtn">Buy & Trade</button>
          </article>
        </div>
      </div>
      <div class="carouselIndicator">
        <div class="indicator activeIndicator" onclick="slideCarousel(0)"></div>
        <div class="indicator" onclick="slideCarousel(1)"></div>
        <div class="indicator" onclick="slideCarousel(2)"></div>
        <div class="indicator" onclick="slideCarousel(3)"></div>
        <div class="indicator" onclick="slideCarousel(4)"></div>
        <div class="indicator" onclick="slideCarousel(5)"></div>
      </div>
    </section>

    <!-- Processes -->
    <section class="gridSection">
      <div class="sectionDesc processessDesc">
        <h1 class="sectionHeader">Chain Process</h1>
        <p class="sectionPara">
          With minimum Charges Take your trading to Next Level With TradeWhiz.
        </p>
        <div class="eachProcesses">
          <img src="./img/handshake-icon-white-line.svg" alt="handshake" />
          <div class="eachprocessesPara">
            <h1 class="processTitle">Trading</h1>
            <p>
              The act of speculating price movements
             
            </p>
          </div>
        </div>
        <div class="eachProcesses">
          <img src="./img/cart-icon-white-line.svg" alt="handshake" />
          <div class="eachprocessesPara">
            <h1 class="processTitle">Buying</h1>
            <p>
             Buy Top Performing Indian Stocks
            </p>
          </div>
        </div>
      </div>
      <div class="sectionPic bouncepic processesPic" id="sectionPic">
        <img src="./img/chain-process-img.png" alt="" />
      </div>
    </section>

    <!-- Markets -->
    <section class="gridSection">
      <div class="sectionDesc marketDesc">
        <h1 class="sectionHeader">Markets at finger</h1>
        <p class="sectionPara">
        </p>
        <div class="eachMarket">
          <img src="./img/buy-icon-color.svg" alt="handshake" />
          <div>
            <h1 class="marketTitle">Buying</h1>
            <p class="darkPara">
            Discover leading stock exchanges where you can trade a wide range of stocks, including popular companies and diverse assets.
            </p>
          </div>
        </div>
        <div class="eachMarket">
          <img src="./img/trading-icon-color.svg" alt="handshake" />
          <div>
            <h1 class="marketTitle">Trading</h1>
            <p class="darkPara">
            Participate in speculative trading on stock price movements through a CFD trading account or traditional buying and selling.
            </p>
          </div>
        </div>
        <div class="eachMarket">
          <img src="./img/support-icon-color.svg" alt="handshake" />
          <div>
            <h1 class="marketTitle">Supporting</h1>
            <p class="darkPara">
            New to stocks? Get started with ease using TradeWhiz, your gateway to the world of stock trading.
            </p>
          </div>
        </div>
        <div class="eachMarket">
          <img src="./img/online-icon-color.svg" alt="handshake" />
          <div>
            <h1 class="marketTitle">Online</h1>
            <p class="darkPara">
            Stock trading remains a top choice for investors, offering diverse opportunities and market dynamics despite differing expert opinions.
            </p>
          </div>
        </div>
      </div>
      <div class="sectionPic marketspicSection" id="sectionPic">
        <h1 class="marketspicHeader">Equity Securities</h1>
        <div class="marketsPicContainer">
          <div class="marketPic marketPic1">
            <img src="./img/hdfcorange.jpg" alt="" />
            <article class="marketTitle">HDFC Bank</article>
          </div>

          <div class="marketPic marketPic2">
            <img src="./img/itc.jpg" alt="" />
            <article class="marketTitle">ITC Inc.</article>
          </div>

          <div class="marketPic marketPic3">
            <img src="./img/tatabluelogo.jpg" alt="" />
            <article class="marketTitle">Tata Motors</article>
          </div>

          <div class="marketPic marketPic4">
            <img src="./img/greenReliance.jpg" alt="" />
            <article class="marketTitle">Reliance</article>
          </div>
        </div>
      </div>
    </section>

    <!-- Dashboard -->
    <section class="gridSection">
      <div class="sectionDesc dashboardDesc">
        <h1 class="sectionHeader">Trade Stocks in seconds</h1>
        <p class="sectionPara">
          With TradeWhiz, you can invest at your own comfort!
        </p>
        <h3>Real Time Graph</h3>
      </div>

      <div class="tradingview-widget-container" id="trading-view">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright">
          <a
            href="https://www.tradingview.com/"
            rel="noopener nofollow"
            target="_blank"
            ><span class="blue-text">Track all markets on TradingView</span></a
          >
        </div>
        <script
          type="text/javascript"
          src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js"async>
            {
            "height":420,
            "width":800,
            "symbol": "SENSEX",
            "interval": "30",
            "timezone": "Etc/UTC",
            "theme": "dark",
            "style": "1",
            "locale": "en",
            "enable_publishing": false,
            "calendar": false,
            "support_host": "https://www.tradingview.com"
             }

             </script>    
          
      </div>
    </section>


    <section class="gridSection">
      <div class="sectionPic bouncepic newsletterPic">
        <img src="./img/newsletter2.png" alt="" />
      </div>
    </section>

    <footer>
      <div class="joinSection">
        <div class="joinDesc">
          <h1 class="sectionHeader"></h1>
  

      <div class="footerCopyright">
        <p>Trading Bot Site Project <a href="#" class="developedBy"></a>.</p>
      </div>
    </footer>

    <script src="./script.js"></script>
  </body>
</html>
