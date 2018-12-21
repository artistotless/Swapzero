         <?php
include ($_SERVER['DOCUMENT_ROOT']."/settings/config.php");

?>

<body class="fixed-nav sticky-footer" id="page-top" style="">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="">
  	  <!-- HEAD BLOCK-->
    <?php include($site_url.'blocks/head.php'); ?>
    
      <!-- MENU BLOCK-->
    <?php include($site_url.'blocks/menu.php'); ?>
    
    
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
    
        <!-- PITCH BLOCK-->
      <?php include($site_url.'blocks/pitch.php'); ?>
    
    <!-- CONTENT BLOCK-->
      <?php echo
      '
      <div class="row">
            <div class="col-xl-2 col-md-3">
            	<div class="tab_nav">
                	<ul role="tablist" id="pills-tab" class="nav nav-pills">
                  <li class="nav-item">
                    <a href="#tab1" data-toggle="tab" class="tab-link active">General</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tab2" data-toggle="tab" class="tab-link">Payment</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tab3" data-toggle="tab" class="tab-link">Tokens</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tab4" data-toggle="tab" class="tab-link">Other</a>
                  </li>
                </ul>
                </div>
            </div>
            <div class="col-xl-10 col-md-9">
                <div class="tab-content">
                    <div role="tabpanel" id="tab1" class="tab-pane fade show active">
                        <div class="faq_content2" id="accordion1">
                            <div class="card mb-3">
                              <div id="headingOne" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseOne" aria-expanded="true" href="#collapseOne" data-toggle="collapse">What is cryptocurrency?</a> </h6>
                              </div>
                              <div data-parent="#accordion1" aria-labelledby="headingOne" class="collapse show" id="collapseOne">
                                <div class="card-body"> The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99% and would start buying more of it if the price dropped.</div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingTwo" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseTwo" aria-expanded="false" href="#collapseTwo" data-toggle="collapse" class="collapsed">Which cryptocurrency is best to buy today?</a> </h6>
                              </div>
                              <div data-parent="#accordion1" aria-labelledby="headingTwo" class="collapse" id="collapseTwo">
                                <div class="card-body"> The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99% and would start buying more of it if the price dropped.</div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingThree" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseThree" aria-expanded="false" href="#collapseThree" data-toggle="collapse" class="collapsed">How about day trading crypto?</a> </h6>
                              </div>
                              <div data-parent="#accordion1" aria-labelledby="headingThree" class="collapse" id="collapseThree">
                                <div class="card-body"> While profits are possible trading cryptocurrencies, so are losses. My first year involved me spending hundreds of hours trading Bitcoin with a result of losing over $5,000 with nothing to show for it. Simply trading digital currencies is very similar to gambling because no one really knows what is going to happen next although anyone can guess! While I was lucky to do nothing expect lose money when I started, the worst thing that can happen is to get lucky right away and get a big ego about what an amazing cryptocurrency trader we are. </div>
                              </div>
                            </div> 
                            <div class="card mb-3">
                              <div id="headingFour" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseFour" aria-expanded="false" href="#collapseFour" data-toggle="collapse" class="collapsed">When to sell a cryptocurrency?</a> </h6>
                              </div>
                              <div data-parent="#accordion1" aria-labelledby="headingFour" class="collapse" id="collapseFour">
                                <div class="card-body"> Before Steem I was all in an another altcoin and really excited about it. When I first bought the price was low and made payments to me every week just for holding it. As I tried to participate in the community over the next several months, I was consistently met with a mix of excitement and hostility. When I began talking openly about this, the negative emotions won over in the community and in me. Originally I had invested and been happy to hold no matter what the price which quickly went up after I bought it. </div>
                              </div>
                            </div>
                      </div>
                    </div>
                    <div role="tabpanel" id="tab2" class="tab-pane fade">
                        <div class="faq_content2" id="accordion2">
                            <div class="card mb-3">
                              <div id="headingFive" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseFive" aria-expanded="true" href="#collapseFive" data-toggle="collapse">How does one acquire bitcoins?</a> </h6>
                              </div>
                              <div data-parent="#accordion2" aria-labelledby="headingFive" class="collapse show" id="collapseFive">
                                <div class="card-body"> While it may be possible to find individuals who wish to sell bitcoins in exchange for a credit card or PayPal payment, most exchanges do not allow funding via these payment methods. This is due to cases where someone buys bitcoins with PayPal, and then reverses their half of the transaction. This is commonly referred to as a chargeback.</div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingSix" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseSix" aria-expanded="false" href="#collapseSix" data-toggle="collapse" class="collapsed">Can I make money with Bitcoin?</a> </h6>
                              </div>
                              <div data-parent="#accordion2" aria-labelledby="headingSix" class="collapse" id="collapseSix">
                                <div class="card-body"> You should never expect to get rich with Bitcoin or any emerging technology. It is always important to be wary of anything that sounds too good to be true or disobeys basic economic rules.</div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingSeven" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseSeven" aria-expanded="false" href="#collapseSeven" data-toggle="collapse" class="collapsed">What happens when bitcoins are lost?</a> </h6>
                              </div>
                              <div data-parent="#accordion2" aria-labelledby="headingSeven" class="collapse" id="collapseSeven">
                                <div class="card-body">When a user loses his wallet, it has the effect of removing money out of circulation. Lost bitcoins still remain in the block chain just like any other bitcoins. However, lost bitcoins remain dormant forever because there is no way for anybody to find the private key(s) that would allow them to be spent again. Because of the law of supply and demand, when fewer bitcoins are available, the ones that are left will be in higher demand and increase in value to compensate.</div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingEight" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseEight" aria-expanded="false" href="#collapseEight" data-toggle="collapse" class="collapsed">Who controls the Bitcoin network?</a> </h6>
                              </div>
                              <div data-parent="#accordion2" aria-labelledby="headingEight" class="collapse" id="collapseEight">
                                <div class="card-body">Nobody owns the Bitcoin network much like no one owns the technology behind email. Bitcoin is controlled by all Bitcoin users around the world. While developers are improving the software, they can"t force a change in the Bitcoin protocol because all users are free to choose what software and version they use.</div>
                              </div>
                            </div>
                      </div>	
                    </div>
                    <div role="tabpanel" id="tab3" class="tab-pane fade">
                        <div class="faq_content2" id="accordion3">
                            <div class="card mb-3">
                              <div id="headingNine" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseNine" aria-expanded="true" href="#collapseNine" data-toggle="collapse">How are bitcoins created?</a> </h6>
                              </div>
                              <div data-parent="#accordion3" aria-labelledby="headingNine" class="collapse show" id="collapseNine">
                                <div class="card-body"> New bitcoins are generated by a competitive and decentralized process called "mining". This process involves that individuals are rewarded by the network for their services. Bitcoin miners are processing transactions and securing the network using specialized hardware and are collecting new bitcoins in exchange.</div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingTen" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseTen" aria-expanded="false" href="#collapseTen" data-toggle="collapse" class="collapsed">Why do bitcoins have value?</a> </h6>
                              </div>
                              <div data-parent="#accordion3" aria-labelledby="headingTen" class="collapse" id="collapseTen">
                                <div class="card-body">Bitcoins have value because they are useful as a form of money. Bitcoin has the characteristics of money (durability, portability, fungibility, scarcity, divisibility, and recognizability) based on the properties of mathematics rather than relying on physical properties (like gold and silver) or trust in central authorities (like fiat currencies). In short, Bitcoin is backed by mathematics. </div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingEleven" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseEleven" aria-expanded="false" href="#collapseEleven" data-toggle="collapse" class="collapsed">What determines bitcoin"s price?</a> </h6>
                              </div>
                              <div data-parent="#accordion3" aria-labelledby="headingEleven" class="collapse" id="collapseEleven">
                                <div class="card-body"> The price of a bitcoin is determined by supply and demand. When demand for bitcoins increases, the price increases, and when demand falls, the price falls. There is only a limited number of bitcoins in circulation and new bitcoins are created at a predictable and decreasing rate</div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingTwelve" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseTwelve" aria-expanded="false" href="#collapseTwelve" data-toggle="collapse" class="collapsed">Can bitcoins become worthless?</a> </h6>
                              </div>
                              <div data-parent="#accordion3" aria-labelledby="headingTwelve" class="collapse" id="collapseTwelve">
                                <div class="card-body"> Yes. History is littered with currencies that failed and are no longer used, such as the German Mark during the Weimar Republic and, more recently, the Zimbabwean dollar.</div>
                              </div>
                            </div>
                      </div>	
                    </div>
                    <div role="tabpanel" id="tab4" class="tab-pane fade">
                        <div class="faq_content2" id="accordion4">
                            <div class="card mb-3">
                              <div id="headingThirteen" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseThirteen" aria-expanded="true" href="#collapseThirteen" data-toggle="collapse">Is Bitcoin legal?</a> </h6>
                              </div>
                              <div data-parent="#accordion4" aria-labelledby="headingThirteen" class="collapse show" id="collapseThirteen">
                                <div class="card-body">To the best of our knowledge, Bitcoin has not been made illegal by legislation in most jurisdictions. However, some jurisdictions (such as Argentina and Russia) severely restrict or ban foreign currencies. Other jurisdictions (such as Thailand) may limit the licensing of certain entities such as Bitcoin exchanges.</div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingFourteen" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseFourteen" aria-expanded="false" href="#collapseFourteen" data-toggle="collapse" class="collapsed">Is Bitcoin useful for illegal activities?</a> </h6>
                              </div>
                              <div data-parent="#accordion4" aria-labelledby="headingFourteen" class="collapse" id="collapseFourteen">
                                <div class="card-body">Bitcoin is money, and money has always been used both for legal and illegal purposes. Cash, credit cards and current banking systems widely surpass Bitcoin in terms of their use to finance crime. Bitcoin can bring significant innovation in payment systems and the benefits of such innovation are often considered to be far beyond their potential drawbacks.</div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingFifteen" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseFifteen" aria-expanded="false" href="#collapseFifteen" data-toggle="collapse" class="collapsed">Can Bitcoin be regulated?</a> </h6>
                              </div>
                              <div data-parent="#accordion4" aria-labelledby="headingFifteen" class="collapse" id="collapseFifteen">
                                <div class="card-body"> The Bitcoin protocol itself cannot be modified without the cooperation of nearly all its users, who choose what software they use. Attempting to assign special rights to a local authority in the rules of the global Bitcoin network is not a practical possibility.</div>
                              </div>
                            </div>
                            <div class="card mb-3">
                              <div id="headingSixteen" class="card-header">
                                <h6 class="mb-0"> <a aria-controls="collapseSixteen" aria-expanded="false" href="#collapseSixteen" data-toggle="collapse" class="collapsed">What about Bitcoin and taxes?</a> </h6>
                              </div>
                              <div data-parent="#accordion4" aria-labelledby="headingSixteen" class="collapse" id="collapseSixteen">
                                <div class="card-body"> Bitcoin is not a fiat currency with legal tender status in any jurisdiction, but often tax liability accrues regardless of the medium used. There is a wide variety of legislation in many different jurisdictions which could cause income, sales, payroll, capital gains, or some other form of tax liability to arise with Bitcoin.</div>
                              </div>
                            </div>
                      </div>	
                    </div>
                </div>
            </div>
        </div>
      
      ';
      	?>

  <!-- LOGIN BLOCK-->
<?php include($site_url.'pages/login.php');?> 


    
    
    <!-- FOOTER BLOCK-->
    <?php include($site_url.'blocks/footer.php');?> </div>

  
    <!-- SCRIPTS BLOCK-->
   <?php include($site_url.'blocks/scripts.php'); ?>
  </div>

    <script>  
    
$("#sumstart" ).change(function () {

var sum = $( "#sumstart" ).val();

$("#sumfull" ).val(sum);


  })
</script>

</body></html>
        