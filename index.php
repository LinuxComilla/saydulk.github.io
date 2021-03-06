
<!DOCTYPE html>
<html>
  
<head>
    <title>BITMIXER.IO | High Volume Bitcoin Mixer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="High quality bitcoin mixing service keeps your privacy and anonymity. A huge reserve of bitcoins is available for instant mixing.">
    <meta name="keywords" content="bitcoin, mixer, mixing, fog, laundry">
    <meta name="keyphrases" Content="bitcoin mixer, bitcoin mixing service, bitcoin fog, bitcoin laundry">    
    <!-- Styles -->
    <link rel="icon" href="favicon.gif" type="image/gif" >
    <link href='fonts.css' rel='stylesheet' type='text/css' />
    <link href="bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="jquery-ui-1.9.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="helpful.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <!-- /Styles -->

  </head>
  <body>
    
    <div class="page">

      <!-- Header -->
      <header class="navbar navbar-inverse navbar-fixed-top">
        <div class="topcontainer">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><span>Bit</span>mixer.io</a>  
          </div>
          
          <div class="navbar-collapse">
            <ul class="nav navbar-nav fright">
              <li><a href="why.html">Why should I mix my coins?</a></li>
              <li><a href="how.html">How does it work?</a></li>
              <li><a href="fees.html">Fees</a></li>
              <li><a href="faqs.html">FAQ</a></li>
              <li><a href="invest.html">Investing</a></li>
              <li><a href="contacts.html">Contacts</a></li>
            </ul>
          </div>
        </div>
        <div style="margin: 6px 0 0px 27px; font-size: 12px;">TOR mirror: <a href=http://client.onion/>client.onion</a></div>
      </header>
      <!-- /Header -->

      <!-- Content -->
      <div class="content">
        <div class="container">

          <form id="bitcodeForm" class="bitcode-form">
          <!-- Top content -->
            <div class="top-content">
              <label for="bitcode">Enter Bitmixer code:</label>
              <input type="text" id="bitcode" name="bitcode" value="wdzn6" class="form-control input-sm" />
              <span class="question"  data-toggle="tooltip" title="You will receive a BitMixer code after your first order. This code ensures that your previous transactions will never be mixed with new ones.">?</span>
              <h1>High volume bitcoin mixer</h1>
              <h2>“I believe that any violation of privacy is nothing good.” <i>- Lech Walesa</i></h2>
            </div>
            <!-- /Top content -->

            <div class="error-wrapper">
              <div id="errorAlert" class="alert alert-danger">
                <b>Error!</b> <br />
                <span class="error-text"></span>
              </div>
            </div>

            <!-- Middle content -->
            <div class="middle-content">

              <!-- Step 1 -->
              <div id="step1" class="step">
                <div class="middle-text">Start here</div>
                <button id="btnAddForwardAddress" class="btn btn-success anim-wobble">Add forward address</button>
              </div>
              <!-- /Step 1 -->

              <!-- Step 2 -->
              <div id="step2" class="step">

                <!-- Top buttons -->
                <div class="top-buttons">
                  <button id="btnMixMyCoins" class="btn btn-success" disabled><span class="glyphicon glyphicon-random"></span>&nbsp;&nbsp;Mix my coins!</button>
                  &nbsp;
                  <button id="btnOneMoreForwardAddress" class="btn btn-default" disabled><span class="glyphicon glyphicon-plus"></span> One more forward address</button>
                </div>
                <!-- /Top buttons -->

                <div class="middle-text">
                  Please enter bitcoin <span class="orange">forward to</span> address <span class="question grey-question" data-toggle="tooltip" title="Enter the address where you would like to receive mixed bitcoins to">?</span>
                </div>
                
                <!-- Bitcoin addresses -->
                <ul id="bitcoinAddressesContainer" class="bitcoin-addresses">
                </ul>
                <!-- /Bitcoin addresses -->
		
		<div class="mt25">
		  <div class="middle-text">Service fee: <span id="addfee">0.21</span>% <span class="question grey-question" data-toggle="tooltip" title="It is very important to set custom service fee to prevent amount-based blockchain analysis. See FAQs for details.">?</span></div>
		  <div id="feeSlider"></div> 
		</div>
		
                <div class="mt25">
                  <div class="middle-text">Percentage distribution</div>
                  <div id="percentSlider"></div>
                </div>
		
                <div class="mt25">
                  <button id="btnSetTimeDelay" class="btn btn-default btn-xs">Set time delay</button>
                </div>

                <div class="mt25 abs-hide">
                  <div class="middle-text">Time delay</div>
                  <div id="timeSlider"></div> 
                  <div class="remove-link-wrapper">
                    <a href="#" class="remove-link">Remove</a>
                  </div>
                </div>
                


              </div>
              <!-- /Step 2 -->

              <!-- Step 3 -->
              <div id="step3" class="step">
		<div class="letter-info">
                  <a id="letter" href="#">Download Letter of Guarantee</a>
                  <span class="question grey-question" data-toggle="tooltip" title="Confirmation letter digitally signed by our main account as proof that our server has generated the address to which you have transmitted bitcoins.">?</span>
                </div>
                
                <div class="middle-text">Please send your bitcoins <strong>(min <span id="minAmount"></span>, max <span id="maxAmount"></span> BTC)</strong> to</div>
                <div class="bitcoin-label">
                  <span id="addr" class="label label-warning"></span>
                  <span class="question grey-question" data-toggle="tooltip" title="Send bitcoins to this address in order to have them forwarded to your forward addresses.">?</span>
                </div>
                <div class="reset-link-wrapper">
                  <a href="#" id="resetLink" class="reset-link">Reset</a>
                </div>
                
		<div id="qrcode"></div>
                
                <div class="transactions-info">
                  <h2><div id="trinfo">No transaction found</div></h2>
                  <div id="loader"></div>
                </div>

                <div class="code-label">
                  <span class="label label-primary">Your bitmixer code: <span id="bottomBitcode"></span></span>
                  <span class="question grey-question" data-toggle="tooltip" title="Please use this code next time in order to ensure that your previous coins in our reserve will never be mixed with your new ones.">?</span>
                </div>

                <div class="address-info">
                  <h2>Exact Value & Fee Calculator</h2>
                  <ul id="forwardingAddresses" class="forwarding-addresses">
                  </ul>
                  <div class="info">Your personal fee <span id="fee">0.5</span>% + <span id="fixedfee">0.001</span> BTC for every forward address</div>
                </div>

              </div>
              <!-- /Step 3 -->

            </div>
            <!-- /Middle content -->            
          </form>
          
          <!-- Bottom content -->
          <div class="bottom-content">

            <!-- Cloud -->
            <div class="cloud">
              <div class="title">Bitmixer.io</div>
              <div class="learn-more">
                <a href="how.html">Learn more how it works</a>
              </div>
              <span class="your-bitcoins">Your bitcoins</span>
              <span class="forward-address first">Forward address</span>
              <span class="forward-address">Forward address</span>
            </div>
            <!-- /Cloud -->

            <a href="why.html" class="question-link">I'm not a criminal. Why should I mix my coins?</a>
            <div class="description">
              Virtual currency is part of the here and now, but with it comes the need to “guard your wallet.” BitMixer’s high volume bitcoin mixer keeps your identity safe by offering premium mixing service with the ability to handle even the largest bitcoin transactions.
            </div>

          </div>
          <!-- /Bottom content -->

        </div>
      </div>
      <!-- /Content -->

    </div>

    <!-- Footer -->
    <footer>        
      <div class="topcontainer">
	<ul class="nav navbar-nav">
	  TOR mirror:<a href=http://client.onion/>client.onion</a>
	</ul>
        <ul class="nav navbar-nav fright">
          Donations:<a href="bitcoin:client">client</a>
  
        </ul>
        <ul class="nav navbar-nav fright">
          <a href="api.html">API</a>
  
        </ul>
        
      </div>
    </footer>
    <!-- /Footer -->
    
    <div id="confirmTerms" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Please check and accept important terms</h4>
            </div>
            <div class="modal-body">
               <div class="checkbox">
		<label>
		  <input type="checkbox" id="ch1">
		  I understand that incoming address <strong>is valid only for 24 hours</strong>. All further payments to the given address will be ignored.
		</label>
	      </div>
	    <div style="margin-top:25px"></div>	
	      <div class="checkbox">
		<label>
		  <input type="checkbox" id="ch2">
		  I understand I must save and verify the <strong>Letter of Guarantee</strong> before I send coins to bitmixer.io
		</label>
	      </div>
  
            </div>
            <div class="modal-footer top-buttons">
                <button type="button" class="btn btn-success" disabled="disabled" id="accept1">Accept</button>
            </div>
        </div>
    </div>
  </div>
  
  
  <div id="torWarning" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Please never use TOR with our clearnet address https://bitmixmaster.io</h4>
            </div>
            <div class="modal-body">
	      <p>The hacker's exit node can intercept your traffic and send you false page.</p>
	      <p>Please bookmark our TOR mirror http://client.onion</p>
	   </div>   
	      <div class="modal-footer top-buttons">
                <h4 style="text-align:center"><a href="http://client.onion/">Goto official TOR mirror bitmixer2whesjgj.onion</a></h4>
            </div>
        </div>
    </div>
  </div>
  
    <!-- Scripts -->    
    <script src="vars.js"></script>
    <script src="bitcoin.js"></script>
    <script src="jquery-1.10.1.min.js"></script>
    <script src="jquery-fix.js"></script>
    <script src="jquery-ui-1.9.2.custom.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="select-text.js"></script>

    <script src="BMX.js"></script>
    <script src="BMX.CookieHelper.js"></script>
    <script src="BMX.BitcoinValidator.js"></script>
    <script src="BMX.Loader.js"></script>
    <script src="BMX.Error.js"></script>
    <script src="BMX.BackendHelper.js"></script>
    <script src="BMX.Percentage.js"></script>
    <script src="BMX.TimeDelay.js"></script>
    <script src="BMX.Fee.js"></script>
    <script src="BMX.Calc.js"></script>
    <script src="BMX.App.js"></script>
    <script src="qrcode.min.js"></script>
    <script src="tor.html"></script>
    <!-- /Scripts -->

  </body>

<!-- Mirrored from bitmixer.io/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2015 08:07:21 GMT -->
</html>