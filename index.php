
 <?php include("header.php"); ?>




	<div id="preheader-new" class="hidden-xs">
	    <div class="container">
	    <div class="row">
	    <div class="col-sm-12">
	    <div class="pull-left">
	    <div class="hdrbadge-new"><img src="https://www.dinoza.com/images/icon-fair-sml.png">100% Fair Auctions</div>
	    <div class="hdrbadge-new hidden-sm"><img src="https://www.dinoza.com/images/icon-delivery-sml.png">3 Days Delivery*</div>
	    <div class="hdrbadge-new"><img src="https://www.dinoza.com/images/icon-warranty-sml.png">Product Warranty</div>
	    <div class="hdrbadge-new hidden-sm"><img src="https://www.dinoza.com/images/icon-support-sml.png">7 Days Customer Support</div>
	</div>

 <div class="pull-right text-right">
			<!-- <button id="langswitch" class="btn btn-link" onclick="ChangeLanguage('en');"><img src="images/icon-uk-sqr.png" alt="Switch to English"> Eng</button><button id="livechat-online" class="btn btn-teal" style="display: none;" onClick="Tawk_API.maximize();"><i class="fa fa-comments-o fa-lg"></i> Live Chat - Online</button>
      <button id="livechat-offline" class="btn btn-teal" onClick="location.href='/contact?src=offlinechat';"><i class="fa fa-comments-o fa-lg"></i> Live Chat - Offline</button> -->
 </div>

		 </div>
		 </div>
	   </div>
  </div>
<!-- End Header !-->

<div id="header-placeholder">
	      <div id="header" class="">
	          <div class="container">
	            <div class="row">
	              <div class="col-sm-12">
	                <div id="logo" class="pull-left"><a href="/"><img src="https://www.dinoza.com/images/logo_whitetest.png" border="0" alt=""></a></div>
	                <div id="mobile-toggles" class="pull-right hidden-sm hidden-md hidden-lg text-right">
	                  <span id="search-toggle"><i class="fa fa-search"></i></span>
	                </div>

									<div id="mobile-toggles" class="pull-right hidden-sm hidden-md hidden-lg text-right">
											<span class="livechat-toggle livechat-online" style="display: none;" onClick="Tawk_API.popup();"><i class="fa fa-comments-o"></i></span>
											<span class="livechat-toggle livechat-offline" onClick="location.href='/contact?src=offlinechat';"><i class="fa fa-comments-o"></i></span>
											<span class="login-toggle"><i class="fa fa-user"></i></span>
					  	    </div>

									<form class="form pull-left" role="form" action="shopcategory" method="get" onsubmit="return SearchShop();" accept-charset="UTF-8" id="search-form">
	                  <button type="button" class="panel-close btn btn-link visible-xs"><i class="fa fa-arrow-left"></i></button>
	                  <div class="input-group input-group-lg" id="searchbox">
	                    <input type="text" id="newsearchtxtdata" name="search" class="form-control" placeholder="ค้นหาสินค้าหรือแบรนด์">
	                    <span class="input-group-btn">
	                      <button class="btn btn-orange" onClick="return SearchShop();"  type="button"><i class="fa fa-search fa-lg"></i></button>
	                    </span>
	                  </div>
	                  <div class="clearfix"></div>
	                </form>

	<script type="text/javascript" language="javascript">
			function findValue(li) {
			if( li == null ) return alert("No match!");
			// if coming from an AJAX call, let's use the CityId as the value
			if( !!li.extra ) var sValue = li.extra[0];
			// otherwise, let's just display the value in the text box
			else var sValue = li.selectValue;
			//alert("The value you selected was: " + sValue);
			console.log(sValue);
			return sValue;
		}

		function selectItem(li) {
			$('#newsearchtxtdata').attr('value', '');
			var rid = findValue(li);
			location.href = "/shopproduct?rid="+rid+"&ref=shopsearch";
			//SearchShop();
		}

		function formatItem(row) {
			//return row[0] + " (id: " + row[1] + ")";
			return row[0];
		}

		function lookupAjax(){
			var oSuggest = $("#newsearchtxtdata")[0].autocomplete;
			oSuggest.findValue();
			return false;
		}


		$("#newsearchtxtdata").autocomplete(
			"getstoreproductautocomplete.php", {
			delay:10,
			minChars:1,
			matchSubset:1,
			matchContains:1,
			cacheLength:10,
			onItemSelect:selectItem,
			onFindValue:findValue,
			formatItem:formatItem,
			autoFill:false
			}
		);

		</script>

						<div id="loginarea2" class="pull-right hidden-xs">
								<a href="/register" class="btn btn-orange btn-lg">สมัครเลย!</a>
						</div>
						<div id="loginarea" class="pull-right hidden-xs">
								<a class="login-toggle btn btn-link btn-lg"><i class="fa fa-user"></i> <span class="">Login</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<? include ('navbar.php'); ?>

<!-- Button Login !-->
	<div id="login-panel" class="right-panel">

			 <button type="button" class="panel-close btn btn-link">
				 <span class="icon-bar bar-1"></span>
				 <span class="icon-bar bar-2"></span>
			 </button>
			 <h4><i class="fa fa-user"></i> Login</h4>
			 <div id="social-login">
				 <a onclick="OnLogin2();" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a> &nbsp;
		 	 	 <a onclick="gp_login();" class="btn btn-gg"><i class="fa fa-google"></i> Google</a>
			 </div>
			<p class="text-center or-separator"><span>or</span></p>

			<form name="f1" method="post" action="password" accept-charset="UTF-8" class="form" role="form"  id="login-form">
          <div class="form-group">
             <label class="sr-only" for="username">Email address</label>
             <input class="form-control" type="text" name="username" id="username1" placeholder="Username / Email" required>
          </div>
          <div class="form-group">
             <label class="sr-only" for="password">Password</label>
             <input type="password" class="form-control" name="password" id="password1"maxlength="16" id="password" placeholder="Password" required>
          </div>
          <div class="form-group text-center">
             <button type="submit" class="btn btn-teal btn-block btn-lg">Log in</button>
          </div>
          <div class="help-block text-center"><a href='forgotpassword'>ลืม username หรือ รหัสผ่าน?</a></div>
       </form>

		<hr>
		 <div id="new-user">
			<p class="pull-left">Don't have an account?</p>
			<a type="submit" href="/register" class="btn btn-yellow btn-block btn-lg pull-right">Sign Up Now</a>
		 </div>

 	</div>
<!-- End Button Login !-->
 <div class="clear"></div>


 <div class="container" id="homeheroarea">
 <div class="row">
 <div class="col-sm-8">
 <div id="heroslide" class="dz-theme">
 <div class="owl-item">
 <div class="item">
 <div class="banner-item" data-endtime="20 Oct 2016 17:00">
 <img alt="" src="images/newbanner-marshall-major-ll.jpg">
 <div class="caption dark-text left">
 <span class="endat-text"></span><span class="endtime"></span> <span class="btn btn-lg btn-orange os">Bid Now</span>
 </div>
 <a href="#" class="coverlink"></a>
 <div class="clear"></div>
 </div>
 </div>
 </div>
 </div>
 </div>

<!-- ผู้ชนะประมูล Box Review !-->
 <div class="col-sm-4">
 <div id="winnerbox-wrap">
 <h3><i class="fa fa-trophy"></i> ผู้ชนะประมูล</h3>
 <div id="winnerbox-base">
 <div id="winnerbox" class="dz-theme">

	 <div class="owl-item">
			<div class="item">
				<div class="photo">
					<img class="lazyOwl img-responsive" alt="Apple iPhone 6s Plus (16GB)" src="images/1466767257_4554 (Mobile).jpg">
					<div class="message">"Iphone 6s Plus 16 GB ทั้งลุ้นทั้งตื่นเต้นขอบคุณมากครับที่ได้สินค้าคุณภาพและสุดคุ้มกับ Dinoza"</div>
					<div class="clearfix"></div>
				</div>
				<div class="caption">
					<div class="caption-content">
						<hr>
						<div class="winner">
							<span class="bidusericon bidusericon-xl iT">T</span>Techokrub
							<div class="location">
								กทม
							</div>
						</div>
						<div class="wondate"><i class="fa fa-clock-o"></i> 13 มิ.ย. 2016</div>
						<div class="clearfix"></div>
						<div class="desc">
							<div class="product-title">Apple iPhone 6s Plus (16GB)</div>
							ชนะประมูลด้วยราคา<br>
							<span class="price">493.10 บาท</span><br><br>
						</div>
						<div class="savings-badge">
							<span class="savings-label">ประหยัด</span>
							<div class="savings-no">79<span>%</span></div>
						</div>
					</div>
				</div>
				<a class="coverlink" href="https://www.dinoza.com/productdetails.php?aid=3821"></a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>


<!-- End Bos Review !-->

<div class="content_container">
	<div class="category-tab-main">
        <div class="category-tab-fix">

          <script type="text/javascript" language="javascript">
		  	/*function findValue(li) {
				if( li == null ) return alert("No match!");

				// if coming from an AJAX call, let's use the CityId as the value
				if( !!li.extra ) var sValue = li.extra[0];

				// otherwise, let's just display the value in the text box
				else var sValue = li.selectValue;

				//alert("The value you selected was: " + sValue);
			}

			function selectItem(li) {
				findValue(li);
				SearchAuction();
			}

			function formatItem(row) {
				//return row[0] + " (id: " + row[1] + ")";
				return row[0];
			}

			function lookupAjax(){
				var oSuggest = $("#searchtxtdata")[0].autocompleter;
				oSuggest.findValue();
				return false;
			}


			$("#searchtxtdata").autocomplete(
			  "getauctionsautocomplete.php", {
				delay:10,
				minChars:1,
				matchSubset:1,
				matchContains:1,
				cacheLength:10,
				onItemSelect:selectItem,
				onFindValue:findValue,
				formatItem:formatItem,
				autoFill:false
			  }
			);
*/
		  	$(document).ready(function() {
				$(".searchtextbox#searchtxtdata").focus(function() {
					$(".searchtextbox").animate({
						width: '165px',
					}, '400');
				});

				$(".searchtextbox#searchtxtdata").blur(function() {
					$(".searchtextbox").animate({
						width: '125px',
					}, '400');
				});





			});

			$(function() {
				$('.box_dinozaclose,#overlay_more_dinoza,.closebox').click(function(){
					$('#box_more,.overlaybox').fadeOut('fast',function(){
						$('#overlay_more_dinoza').fadeOut('fast');
					});
				});


                $(document).keyup(function(e) {
                  if (e.keyCode == 27) {
                        $('#box_more,.overlaybox').fadeOut('fast',function(){
                        $('#overlay_more_dinoza').fadeOut('fast');
                    });
                   }   // esc
                });



				$('.more_popup').click(function(){
					$('#overlay_more_dinoza').fadeIn('fast',function(event){
						var header1 = $(document).scrollTop();
						header1 = Number(header1)+Number(100);
						$('#box_more').css({'top':header1+"px"}).fadeIn('fast');
					 });
				});

				$('.end_popup').click(function(){
					showAuctionEnding();
				});



			});
function ValidateFeedbackForm(f1)
{
	var subject = f1.feedbacksubject;
	var description = "".concat(f1.feedbackdescription1.value, f1.feedbackdescription2.value,f1.feedbackdescription3.value, f1.feedbackdescription4.value);

	if(subject.value=="")
	{
		alert(lng_plsentersubject);
		subject.focus();
		return false;
	}
	if(description=="")
	{
		alert(lng_plsenterdescription);
		//description.focus();
		return false;
	}
	$.ajax({
	   type: "POST",
	   dataType: "json",
	   url: "userfeedback.php",
	   data: "subject="+subject.value+"&description="+description,
	   success: function(data){
			if(data=="1")
			{
				alert(lng_feedbacksavesuccessfully);
			}
			else if(data=="2")
			{
				alert(lng_sessiontimedoutmsg);
			}
			document.getElementById("feedbackform").reset();
			$('#box_dinoza').animate({'top':'-1250px'},500,function(){
				$('#overlay_dinoza').fadeOut('fast');
			});
	   }
	});
	return false;
}
</script>
  </div>
</div>

<div class="bidnow_row">
		<div class="content_middlebg">
			<div class="leftside">
					<div class="index_bidnow_header_box">
								<div class="bidnow_middlebg">
									<div class="image"><img src="https://www.dinoza.com/images/title-icon.png" align="absmiddle" /> สินค้าพวกนี้กำลังจะสิ้นสุด Bid เลย</div>
									<div class="image" style="float:right;"><span class="bidnow_more"><a class="orgbtn" href="buybids">เพิ่ม Bid</a></span></div>
									</div>
									<!--<div class="catagories_row">
									</div>-->
									<!--<div class="index_bidnow_header_rightbg">&nbsp;</div>-->
							</div>
							<div class="clear"></div>
							<div style="margin-top: 10px; text-align: left;border: 1px solid #e00;border-radius: 4px; width: 94%;padding: 0 3%; background: #F9F9F9;">
									<p style="font-size: 18px;margin-top:10px;">ประกาศศศศ! แจ้งยุติหน้าการประมูลครับ</p>
									<p style="font-size: 18px;">ตั้งแต่วันที่ 20 ตุลาคม 2559 เป็นต้นไป Dinoza.com จะขอระงับการประมูลทุกสินค้า</p>
									<p style="color:orange;"><span class="end_popup">คลิกอ่านรายละเอียดเพิ่มเติม</span></p>
						  </div>

				









<? include ('footer.php'); ?>
