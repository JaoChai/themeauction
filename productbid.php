<?php include("header.php"); ?>

<? include ('search.php'); ?>

<? include ('navbar.php'); ?>

<script type="text/javascript">
jQuery(document).ready(function() {

		if(getCookie("toshow")== "1")
	{
		setCookie("toshow","0",30);
		showNewBsrWindow();

	}

	setTimeout(function(){
		jQuery(".recent_ended_auction_summery_main").slideDown(1000);
	}, 5000);
});
</script>



<div class="content_container">
	<div class="bidnow_row">
       <div class="content_middlebg">
            <div class="myaccount_container">
            <div class="allauctions_container" style="width:980px;">
                <div class="allauctions_heading_row">
                      <div class="allauctions_heading_row" style="width:980px;">
                         <div class="myaccount_heading_leftbg">&nbsp;</div>
                            <div class="static_pg_heading_middlebg"><h1 class="heading_product_name">  Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง  </h1>


                        </div>
                        <div class="myaccount_heading_rightbg">&nbsp;</div>
                      </div>


          <div class="recent_ended_auction_summery_main">
          	<div class="recent_ended_auction_summery">
    							<div class="recent_ended_auction_congrats_to_main">
                                    <strong>chantharak</strong>&nbsp;ประมูล
                                    <strong><a href="productdetails.php?aid=4471">Apple iPhone 6s (128GB)</a></strong>
                                    ได้ในราคาเพียง
                                    <strong class="auction_ended_price">฿119.40</strong> เท่านั้น!
                  </div>
          <div class="recent_ended_auction_since_launch"><a href="items?aid=3" class="recent_ended_auction_since_launch">ดูอีก&nbsp;<strong>3799</strong>&nbsp;คนที่ได้ราคาดีขนาดนี้</a></div>
						</div>
				</div>

				<div class="product_details_content_bg" style="width:977px; margin-bottom:10px;">
                        <div class="product_details_content_inner" style="width:977px;">
                            <div class="product_details_inner_image" style="padding-left:13px;">
                                <div class="product_details_inner_image_detailbox" style="width:368px;">

                                    <div class="product_details_inner_image_body" id="detailbodymargin">
                                        <div class="product_details_inner_image_big">
                                          <span id="mainimage1"><img src="images/popup_3293ef9265b9ad5f01ce3eec36bfe1ac.jpg" alt="" /></span>
                                          <span id="mainimage2" style="display:none;"><img src="images/popup_2ffff8260796ef1d6699311e08044170.jpg" alt=""/></span>
                                          <span id="mainimage3" style="display: none"><img src="images/popup_acf8f76216cda98ca42d03bcb9d2182d.jpg" alt="" /></span>
                                          <span id="mainimage4" style="display: none"><img src="images/popup_59a4010450a8c9f2334800f599ee2110.jpg" alt=""/></span>
                                        </div>
                                        <div class="product_details_inner_image_thumb_top">

									<div class="product_details_inner_image_thumb_middle_bg">
												<div class="product_details_inner_image_thumb_middle_body">
                          <div class="product_details_inner_image_thumb_box">
														<img src="images/thumbsmall_3293ef9265b9ad5f01ce3eec36bfe1ac.jpg" onclick="changeimage(1);" id="otherimageprd_1" style="cursor: pointer" alt="" width="80" height="63" /></div>
														<div class="product_details_inner_image_thumb_box"><img src="images/thumbsmall_2ffff8260796ef1d6699311e08044170.jpg" onclick="changeimage(2);" id="otherimageprd_2" style="cursor: pointer" alt="" width="80" height="63" /></div>
													  <div class="product_details_inner_image_thumb_box"><img src="images/thumbsmall_acf8f76216cda98ca42d03bcb9d2182d.jpg" onclick="changeimage(3);" id="otherimageprd_3" style="cursor: pointer" alt="" width="80" height="63" /></div>
														<div class="product_details_inner_image_thumb_box"><img src="images/thumbsmall_acf8f76216cda98ca42d03bcb9d2182d.jpg" onclick="changeimage(3);" id="otherimageprd_3" style="cursor: pointer" alt="" width="80" height="63" /></div>
										</div>
							   <div id="auctiontypeicon" class="auction_image1">
																			 											 																													 											 																													 											 																													 											 																													 											 																													 											 											<a onmouseover="javascript:showhide_auctype(6,'over');" onmouseout="javascript:showhide_auctype(6,'out');" style="cursor:pointer"><img src="images/buynow_big.png" title="สามารถซื้อสินค้าได้" alt="" /></a>&nbsp;
																					 																			 											 																													 											 																			                                                                            <a onmouseover="javascript:showhide_auctype(99,'over');" onmouseout="javascript:showhide_auctype(99,'out');" style="cursor:pointer"><img src="images/icon-bidbooster-x6-big.png" title="Bid Booster" alt="" /></a>&nbsp;
                                          </div>



			                      </div></div>
                                <!--ShareThis Box Start Here-->
                                <div id="sharethis-small">


                                        <div class="divclear"></div>
                                        <div id="auction_type1" style="display:none; margin-left:45px;">
                                        <div class="auctiontype-detail-body auction-image2">
                                            <div style="color: #FFFFFF; font-weight:bold; text-align:center; font-size:1.3em;">ฟรีค่าปิดประมูล</div>
                                            <div style="text-align:center; padding:5px;">ผู้ชนะการประมูลไม่ต้องชำระค่าปิดประมูล<br>จ่ายเฉพาะค่าจัดส่งสินค้าเท่านั้น</div></div>
                                        </div>

                                        <div class="divclear"></div>
                                        <div id="auction_type2" style="display:none; margin-left:45px;">
                                        <div class="auctiontype-detail-body auction-image2">
                                            <div style="color: #FFFFFF; font-weight:bold; text-align:center; font-size:1.3em;">Fixed Price</div>
                                            <div style="text-align:center; padding:5px;">ผู้ชนะประมูลจ่ายเพียง 50%<br>ของราคาเต็มสินค้า + ค่าจัดส่ง<br>โดยไม่คำนึงถึงราคาปิดประมูล</div></div>
                                        </div>

                                        <div class="divclear"></div>
                                        <div id="auction_type3" style="display:none; margin-left:45px;">
                                        <div class="auctiontype-detail-body auction-image2">
                                            <div style="color: #FFFFFF; font-weight:bold; text-align:center; font-size:1.3em;">1 สตางค์</div>
                                            <div style="text-align:center; padding:5px;">ราคาในการประมูลจะเพิ่มขึ้นครั้งละ 1 สตางค์เท่านั้น</div></div>
                                        </div>

                                        <div class="divclear"></div>
                                        <div id="auction_type4" style="display:none; margin-left:45px;">
                                        <div class="auctiontype-detail-body auction-image2">
                                            <div style="color: #FFFFFF; font-weight:bold; text-align:center; font-size:1.3em;">24 ชั่วโมง</div>
                                            <div style="text-align:center; padding:5px;">เปิดให้ทำการประมูลได้ตลอด 24 ชั่วโมง.</div></div>
                                        </div>

                                        <div class="divclear"></div>
                                        <div id="auction_type5" style="display:none; margin-left:45px;">
                                        <div class="auctiontype-detail-body auction-image2">
                                            <div style="color: #FFFFFF; font-weight:bold; text-align:center; font-size:1.3em;">Beginners Only</div>
                                            <div style="text-align:center; padding:5px;">เฉพาะผู้ที่ไม่เคยชนะกาประมูลเท่านั้น</div></div>
                                        </div>

                                        <div class="divclear"></div>
                                        <div id="auction_type6" style="display:none; margin-left:45px;">
                                        <div class="auctiontype-detail-body auction-image2">
                                            <div style="color: #FFFFFF; font-weight:bold; text-align:center; font-size:1.3em;">สามารถซื้อสินค้าได้</div>
                                            <div style="text-align:center; padding:5px;">คุณสามารถซื้อสินค้านี้ได้ในระหว่างประมูลหรือปิดประมุลแล้วไม่เกิน 1 วัน <br>Bid ที่ใช้ไปแล้วจะกลายเป็นส่วนลดต่อราคานะครับ</div></div>
                                        </div>

                                        <div class="divclear"></div>
                                        <div id="auction_type7" style="display:none; margin-left:45px;">
                                        <div class="auctiontype-detail-body auction-image2">
                                            <div style="color: #FFFFFF; font-weight:bold; text-align:center; font-size:1.3em;">CLICK BATTLE MODE</div>
                                            <div style="text-align:center; padding:5px;">ไม่สามารถใช้งานระบบ Bidsaurus</div></div>
                                        </div>

                                        <div class="divclear"></div>
                                        <div id="auction_type8" style="display:none; margin-left:45px;">
                                        <div class="auctiontype-detail-body auction-image2">
                                            <div style="color: #FFFFFF; font-weight:bold; text-align:center; font-size:1.3em;"></div>
                                            <div style="text-align:center; padding:5px;"></div></div>
                                        </div>
                                                                        <div id="auction_type99" style="display:none; margin-left:45px;">
                                        <div class="auctiontype-detail-body auction-image2">
                                            <div style="color: #FFFFFF; font-weight:bold; text-align:center; font-size:1.3em;">Bid Booster</div>
                                            <div style="text-align:center; padding:5px;"></div>
                                        </div>
                                    </div>

												<ul class="social-share">
                                                        <li class="facebook"><a target="_blank" href="https://www.facebook.com/sharer.php?u=https://www.dinoza.com/productdetails.php?aid=4496&t=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com" title="Share on Facebook!"><i class="fa fa-fw fa-facebook-square"></i></a></li>
                                                        <li class="twitter"><a target="_blank" href="https://twitter.com/home?status=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com: https://www.dinoza.com/productdetails.php?aid=4496" title="Share on Twitter!"><i class="fa fa-fw fa-twitter-square"></i></a></li>
                                                        <li class="google-plus"><a target="_blank" href="https://plus.google.com/share?url=https://www.dinoza.com/productdetails.php?aid=4496" title="Share on Google Plus!"><i class="fa fa-fw fa-google-plus-square"></i></a></li>
                                                        <li class="pinterest"><a target="_blank" href="https://pinterest.com/pin/create/button/?url=https://www.dinoza.com/productdetails.php?aid=4496&media=https://www.dinoza.com/uploads/products/popup/popup_3293ef9265b9ad5f01ce3eec36bfe1ac.jpg&description=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com" class="pin-it-button" count-layout="horizontal" title="Share on Pinterest"><i class="fa fa-fw fa-pinterest-square"></i></a></li>
                                                        <li class="email-share"><a title="Share by email" href="mailto:?subject=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com&body=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com https://www.dinoza.com/productdetails.php?aid=4496&title=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com"><i class="fa fa-fw fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                            <div class="clear"></div>
                                        <!--ShareThis Box End Here-->
                                        <div class="clear"></div>
                                    </div>

                                </div>
                            </div>
                            <input type="hidden" id="product_detail_inner_auction_flag_4496" value="1" />
                            <div class="product_details_inner_auction product_details_inner_auction_4496"  id="product_details_inner_auction_4496" >
                                                                                        <div class="auction-item" style="display: none" title="4496" id="auction_4496"></div>
                                                                    <div class="product_details_inner_auction_detailbox">

                                        <div class="product_details_inner_auction_body" id="detailbodymargin">

                                            <div class="product-detail-market-price-row">ลดจากราคา&nbsp;<span class="marketprice_det">฿35100</span></div>

                                            <div class="product-price-row">
                                            	<span class="product_price_row_top">ประมูล ประหยัดสูงสุด</span>
                                                <span class="product_price_row_bottom">99%</span>
                                            </div>


                                            <div class="detail-row" style="padding-top:10px;">
                                                <div class="textnew right1" style="font-size:24px; font-weight:bold;">
                                                <div class="detailtopprice-container">
                                                    <div class="detailtopprice_pd" style="padding-bottom:7px; height:25px; padding-top:0px; display:inline-block; #margin-top:-3px; color:#059E0E;" id="currencysymbol_4496">
                                                    </div><div class="detailtopprice_pd" id="price_index_page_4496" style=" padding-bottom:5px; height:27px; color:#059E0E; padding-top:0px; display:inline-block;">---</div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="detail-row">
                                                <div class="right1" style="width:313px; text-align:center; font-weight:bold; height:25px;"><span class="prod_biddertext" id="product_bidder_4496" style="color:#5B5B5B; width:313px; text-align:center; font-size:18px;">---</span>&nbsp;&nbsp;</div>
                                            </div>
                                            <div class="detail-row" style="margin-bottom:0px;">
                                                <div class="toptimer_prod" style="color:#666666">
                                                    <span id="counter_index_page_4496">

                                                    <script language=javascript>
                                                          document.getElementById('counter_index_page_4496').innerHTML = calc_counter_from_time('11871');
                                                    </script>

                                                  </span>
                                                </div>
                                            </div>

                                            <div class="detail-row">
                                                <div class="normal_text_small_new">
                                                	<span id="normal_text_bid_info_enable_4496" style="display:inline-block;top: -4px;">
                                                            จบ&nbsp;วันนี้                                                    </span>
                                                    <span id="every_bid_resets_clock_txt_4496" style="display:none;top: -4px;">ทุก Bid เพิ่ม 10วิ</span>
                                                    <input type="hidden" id="auction_resets_clock_txt_flag_4496" value="" />
                                                </div>
                                            </div>

                                            <div class="detail-row">
                                                                                                         <span class="btn btn-org btn-bid" alt="Bid" onclick="javascript: window.location.href='login.php?src=pdbidbtn'" id="image_main_4496">Bid<span class="badge bidmulti">x6</span></span>

                                                                                                     <div style="display:none;" class="product_detail_bidnow_bidmultiplier"><span id="product_detail_bidnow_bidmultiplier">x6</span></div>
                                                                                            </div>


                                            <!--<div class="detail-row">
                                                <div class="normal_text_small_new">กด Bid 1 ครั้งราคาเพิ่ม
                                                                                                    ฿0.10
                                                                                                </div>
                                            </div>-->

                                            <!--<div class="detail-row" style="padding-top: 8px;">
                                                <div class="left1">สินค้ามูลค่า :</div>
                                                <div class="right1">฿35,100.00</div>
                                            </div>-->
                                                                                        <!--<div class="detail-row">
                                                <div class="left1">ราคาคง :</div>
                                                <div class="right1">฿0.00</div>
                                            </div>-->
                                            <div class="detail-row" style="font-weight: bold;display:none;">
                                                <div class="left1">ประหยัด:</div>
                                                <div class="right1">฿<span id="placebidssavingdisp">35,100.00</span><span id="placebidscount" style="display: none;">35100</span><span style="display: none;" id="placebidssaving">35100</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prod-detailbox2">
                                                                                <div class="prod-detail-body2 zeropc" id="detailbodymargin" style="height:190px;padding:5px 0;">

                                            <div class="product_detail_amount_info_heading_main">หรือซื้อทันที</div>

																																																																																																																																																																																																																																					                                            <!--<div class="auction-price-row" id="bndiscount" style="padding-bottom:2px;">
                                            	<div class="auction_price_row_top" style="padding-bottom:8px;">Dinoza ลดให้</div>
                                                <div class="auction_price_row_bottom">0%</div>
                                            </div>-->

                                            <div class="auction-price-row" id="bnsavings" style="text-align:center;margin-left:1px;width:49.5%;padding-bottom:2px;display:none;">
                                            	<div class="auction_price_row_top" style="text-align:center;width:100%;padding-bottom:0px;">Dinoza ลดให้ก่อน</div>
                                                <div class="auction_price_row_bottom" style="text-align:center;width:100%;">฿0</div>
                                            </div>

                                            <div class="auction-price-row tipper" id="bnrebate" style="margin-left:1px;padding-bottom:2px;width:99.5% !important;">
                                            	<div class="auction_price_row_top" style="text-align:center;width:100% !important;padding-bottom:0px;">D-Points ที่ได้รับ</div>
                                                <div class="auction_price_row_bottom" style="text-align:center;width:100% !important;"><span id="buynow_placebids_price">0</span></div>
                                                <div class="auction_price_row_below" style="text-align:center;width:100% !important;">มีมูลค่าเท่ากับ <span id="buynow_placebids_bottom">0</span> บาท</div>
                                                <span id="buynow_placebids_price_hid" style="display:none;">0.00</span>
                                                <!--<span class="tip">That's so cool bro!</span>-->
                                            </div>

                                            <div class="final_price_info">คุณจ่ายเพียง</div>
                                            <div class="detail-row">
                                            	<div class="final_buynow_price_savings">฿<span id="buynow_price_savings">35,100</span><span id="buynow_price_savings_hid" style="display:none;">35100.00</span>
                                                </div>
                                            </div>

                                                                                                    <div class="detail-row">
                                                            <!-- <img src="images/thai/buy.png" onmouseover="this.src='images/thai/login1_hover.png'" onmouseout="this.src='images/thai/buy.png'" onclick="window.location.href='login.php?src=pdbuybtn'" style="cursor: pointer" /> -->
                                                            <span class="btn btn-buy" onclick="window.location.href='login.php?src=pdbuybtn'">Buy Now</span>
                                                        </div>
                                                                                    </div>
										                                    </div>
                                                                                                                    </div>
                            <div class="prod-detailbox-container">
                                                        <!--<div class="prod-detailbox2" style="height:64px; margin-top:0px; padding-top:17px;">
                              <div id="auctiontypeicon" class="auction_image1">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <a onmouseover="javascript:showhide_auctype(6,'over');" onmouseout="javascript:showhide_auctype(6,'out');" style="cursor:pointer"><img src="images/thai/buynow_big.png" title="สามารถซื้อสินค้าได้" alt="" /></a>&nbsp;
                                                                                                                                                                                                                                                                                                                                                          </div>
                                                                <div id="fbbtn">
                                    <fb:like href="https://www.dinoza.com/productdetails.php?aid=4496" layout="box_count" width="175" send="false" ></fb:like>
                                </div>
                                                            </div>-->
                                                        <div class="clear"></div>
                            <div id="notification_help" style="display:none;">
                                <div class="email_notification-detail-body" style="margin-top:-95px;">
                                    <div class="email_notification-detail-heading">Email notification for Help</div>
                                    <div class="email_notification-detail-data">Email notification for Help. Please report to Veera@dinoza.com immediately. </div>
                                </div>
                            </div>

                              	<div class="product_details_register-now">
                                    <a href="/registration?src=productdetailintro" id="signupintro"></a>
                                </div>

													<!--Bid History Box Start Here-->
                            <div class="product_detail_bidhistory_main_box">
                                <div id="producthistory1">
                                    <div class="product_detail_bishistory_top">
                                                                                <div class="product-history-full" style="border-bottom:0px solid;"><div class="autobidder_title" >ประวัติการประมูล</div></div>
                                                                            </div>
                                        <div class="product_detail_bidhistory_body">
                                            <div class="divclear"></div>
                                            <div class="product_detail_bidhistory_title_row">
                                                <div class="product_detail_bidhistory_title_bid">ราคา</div>
                                                <div class="product_detail_bidhistory_title_bidder">ผู้ประมูล</div>
                                                <div class="product_detail_bidhistory_title_bidtype">ประเภท</div>
                                            </div>
                                                                                            <div class="product_detail_bidhistory_inner_main">
                                                    <div class="product_detail_bidhistory_inner_bid" id="bid_price_0">
                                                                                                                    ฿1.30
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidder" id="bid_user_name_0">
                                                                                                                    <span class="bidusericon iK">K</span>kakaashi
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidtype" id="bid_type_0">
                                                                                                                    Manual Bid
                                                                                                            </div>
                                                </div>
                                                                                            <div class="product_detail_bidhistory_inner_main">
                                                    <div class="product_detail_bidhistory_inner_bid" id="bid_price_1">
                                                                                                                    ฿1.20
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidder" id="bid_user_name_1">
                                                                                                                    <span class="bidusericon iB">B</span>Betamax
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidtype" id="bid_type_1">
                                                                                                                    Manual Bid
                                                                                                            </div>
                                                </div>
                                                                                            <div class="product_detail_bidhistory_inner_main">
                                                    <div class="product_detail_bidhistory_inner_bid" id="bid_price_2">
                                                                                                                    ฿1.10
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidder" id="bid_user_name_2">
                                                                                                                    <span class="bidusericon iK">K</span>Kangkoc
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidtype" id="bid_type_2">
                                                                                                                    Manual Bid
                                                                                                            </div>
                                                </div>
                                                                                            <div class="product_detail_bidhistory_inner_main">
                                                    <div class="product_detail_bidhistory_inner_bid" id="bid_price_3">
                                                                                                                    &nbsp;
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidder" id="bid_user_name_3">
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidtype" id="bid_type_3">
                                                                                                            </div>
                                                </div>
                                                                                            <div class="product_detail_bidhistory_inner_main">
                                                    <div class="product_detail_bidhistory_inner_bid" id="bid_price_4">
                                                                                                                    &nbsp;
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidder" id="bid_user_name_4">
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidtype" id="bid_type_4">
                                                                                                            </div>
                                                </div>
                                                                                    </div>
                                 </div>
                                 <div id="producthistory1_hidden" style="display: none">
                                    <div class="product_detail_bishistory_top">
                                        <div class="product-history-leftside1" onclick="hideDisplayBids(1);"><div class="autobidder_title_new" style="font-size: 10px;">ประวัติการประมูล</div></div>
                                        <div class="product-history-rightside1" onclick="hideDisplayBids(2);"><div class="autobidder_title_new" style="font-size: 12px; font-weight:bold;">Bid ที่ลงไป</div></div>
                                    </div>
                                    <div class="product_detail_bidhistory_body">
                                        <div class="product_detail_bidhistory_title_row">
                                            <div class="product_detail_bidhistory_title_bid">ราคา</div>
                                            <div class="product_detail_bidhistory_title_bidtime">เวลา</div>
                                            <div class="product_detail_bidhistory_title_bidtype_2">ประเภท</div>
                                        </div>
                                                                            </div>
                                 </div>

                            </div>
                            <!--Bid History Box End Here-->
                            </div>
                        </div>
                    </div>
             </div>

			 			 <!--Product Detail Testimonial Start-->
             <div class="alltestimonial_container_main">
             	<div class="alltesetimonial_container_image">
                	<div class="testimonialvideo">
                	        <img src="images/1472109817_1471745219608.jpg" width="196" height="156" />
                            <div class="alltestimonial_username">weradet</div>
                                                                </div>
                </div>
                <div class="alltestimonial_thatsbigbargain">ซื้อได้ถูกจริง อะไรจริง!</div>
                <div class="recent_ended_auction_since_launch"><a href="winners" class="recent_ended_auction_since_launch">ดูอีก&nbsp;<strong>3799</strong>&nbsp;คนที่ได้ราคาดีขนาดนี้</a></div>
                <div class="alltestimonial_detail_description">เราการันตีความถูกที่ Dinoza.com</div>
                <div class="alltestimonial_detail_description">มีหลายคนแล้วที่ประสบความสำเร็จกับ Dinoza ได้ของไปในราคาที่เหลือเชื่อ</div>
                <div class="alltestimonial_detail_nextcouldbeyou">คนต่อไปอาจเป็นคุณ&nbsp;<span><a href="registration.php">สมัครเลย</a></span></div>

             </div>
             <!--Product Detail Testimonial End-->
             <!--Valentines/TG Product Rebate Options End-->

	<div class="overlay_dinoza" id="overlay_more_dinoza" style="display:none;"></div>
        <div class="box_more overlaybox" id="box_more">
            <a class="box_dinozaclose" id="box_moreclose"></a>
            <div class="main_feedbackform">
                <div class="feedbackrow">
                    <div class="myaccount_heading_middlebg" style="width:100%;">
                        <div style="float:left;width:auto;"><span id="rebateitem"></span></div>
                    </div>
                </div>
                <div class="feedbackrow">
                    <div style="width:100%;">
					<div style="float:left;width: 225px;"><img id="rebateproductimg" style="float: left; margin-right: 20px; width: 210px;" /></div>
						<div style="float:left;width: 300px;margin-left: 20px;">
						<span style="display: block; height 20px;"><span id="rebateproductname"></span></div>
						<span style="display: block; height 20px;"><span class="rebatehead">ลดจากราคา</span>฿ <span id="marketprice"></span></span>
						<!--<span style="display: block; height 20px;"><span class="rebatehead">Dinoza ลดให้</span>฿ <span id="dinozadiscounts"></span></span>-->
						<span style="display: block; height 20px;"><span class="rebatehead">มูลค่า Bid ที่ลงไป</span>฿ <span id="bidsplaced"></span></span>
						<span style="display: block; height 20px;"><span class="rebatehead">คุณจ่ายเพียง</span>฿ <span id="rebateforonly"></span></span>
						<span style="display: block; height 20px;margin-left: 20px;"><span style="display: block; height 20px;margin-left: 20px;">ใช้สิทธิ์ในการใช้สว่นลดจาก Bid โดยโทรมาที่เบอร์ 094-4040-555 หรือ <a href='/contact'>ส่งข้อความที่นี่</a> แล้วแจ้งชื่อสินค้าที่ต้องการ หลังจากจบประมูลทันที</span></span>
						</div>
                    </div>
                </div>
            </div>
        </div>

			 <!--Product Detail Box Start Here -->
				                <!-- PID 398 -->
				<div class="allauctions_container" style="width:980px;">
                  <div class="allauctions_heading_row" style="width:980px;">
                    <div class="myaccount_heading_leftbg">&nbsp;</div>
                        <div class="static_pg_heading_middlebg">รายละเอียดสินค้า</div>
						<span class="history_auctionid" id="history_auctionid">4496</span><span class="item_no" id="item_no" style="position:absolute;top:0;right:55px;float:right;font-size: 20px;background:#eee;padding: 4px 0 4px 8px;">Item #</span>
                    <div class="myaccount_heading_rightbg">&nbsp;</div>
                </div>
                <div class="allauctions_contentbg">
                    <div class="product_detail_body_middle">
                    <div class="product_details_desc_box">
                            <h2>Apple iPhone 6s (128GB)</h2>                            <p class="intro">ตั้งแต่วินาทีที่ได้ใช้งาน iPhone 6s คุณก็รู้ได้ในทันทีว่าไม่เคยมีอะไรที่ให้ความรู้สึกแบบนี้มาก่อน แค่กดง่ายๆ เพียงครั้งเดียว 3D Touch ก็พร้อมจะให้คุณทำอะไรต่อมิอะไรได้มากกว่าที่เคย และก็ยังมีคุณสมบัติ Live Photos กับวิถีใหม่ในการชุบความทรงจำให้กลับมาเปี่ยมด้วยชีวิตชีวา อย่างไรก็ตามนี่ยังเป็นแค่จุดเริ่มต้นเท่านั้น เพราะถ้าได้ลองพิจารณา  iPhone 6s ให้ลึกลงไปอีกขั้น คุณก็จะได้พบกับนวัตกรรมที่แทรกซึมอยู่ในทุกระดับ</p>
                            <div class="product_details_desc booted"><div class="row">
<div class="col-sm-12"><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-1.jpg" alt="iPhone 6s (128GB)" /></div>
<div class="col-sm-3">&nbsp;</div>
<div class="col-sm-6" style="text-align: center;">
<h1>สิ่งที่เดียวที่เปลี่ยนคือทุกสิ่ง</h1>
<div class="col-sm-3">&nbsp;</div>
</div>
</div>
<div class="row" style="margin-top: 40px;">
<div class="col-sm-12"><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-3.jpg" alt="iPhone 6s (128GB)" /></div>
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10" style="text-align: center;">
<p>ตั้งแต่วินาทีที่ได้ใช้งาน iPhone 6s คุณก็รู้ได้ในทันทีว่าไม่เคยมีอะไรที่ให้ความรู้สึก แบบนี้มาก่อน แค่กดง่ายๆ เพียงครั้งเดียว 3D Touch ก็พร้อมจะให้คุณทำอะไรต่อมิอะไร ได้มากกว่าที่เคย และก็ยังมีคุณสมบัติ Live Photos กับวิถีใหม่ในการชุบความทรงจำให้กลับมา เปี่ยมด้วยชีวิตชีวา อย่างไรก็ตามนี่ยังเป็นแค่จุดเริ่มต้นเท่านั้น เพราะถ้าได้ลองพิจารณา iPhone 6s ให้ลึกลงไปอีกขั้น คุณก็จะได้พบกับนวัตกรรมที่แทรกซึมอยู่ในทุกระดับ</p>
<div class="col-sm-1">&nbsp;</div>
</div>
</div>
<div class="row" style="margin-top: 40px;">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10" style="text-align: center;">
<h2>3D Touch</h2>
<h1>เจเนอเรชั่นถัดไปของ Multi-Touch</h1>
<div class="col-sm-1">&nbsp;</div>
</div>
</div>
<div class="row">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10" style="text-align: center;">
<p>ที่ผ่านมา iPhone รุ่นแรกได้เปลี่ยนแปลงวิธีการใช้งานเทคโนโลยีของผู้คนไปตลอดกาล ด้วยการแนะนำให้ท้ังโลกได้รู้จักกับ Multi-Touch และวันนี้ก็เป็นอีกครั้งกับ 3D Touch ที่ให้คุณทำอะไรต่างๆ ในแบบที่ไม่เคยเป็นไปได้มาก่อน ซึ่งสิ่งนี้สามารถรับรู้ได้ถึงน้ำหนักที่ คุณกดลงบนจอภาพ ช่วยให้คุณจัดการทุกเรื่องที่สำคัญได้อย่างรวดเร็วและเรียบง่ายยิ่งขึ้น และในขณะเดียวกัน คุณก็จะรู้สึกถึงการตอบสนองแบบเรียลไทม์ผ่านการสั่นเบาๆ จาก Taptic Engine ที่ออกแบบใหม่หมดด้วย</p>
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-12" style="background-color: #f7f7f7;"><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-4.jpg" alt="iPhone 6s (128GB)" /></div>
</div>
</div>
<div class="row" style="margin-top: 40px;">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10" style="text-align: center;">
<h2>กล้อง</h2>
<h1>รูปถ่าย 12 เมกะพิกเซล, วิดีโอ 4K, Live Photos กับความทรงจำที่ไม่จางหาย</h1>
<div class="col-sm-1">&nbsp;</div>
</div>
</div>
<div class="row">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10" style="text-align: center;">
<p>กล้องที่ได้รับความนิยมมากที่สุดในโลกวันนี้มาพร้อมความล้ำสมัยยิ่งกว่าที่เคย ด้วยกล้อง iSight ที่มีความละเอียดถึง 12 เมกะพิกเซล รูปถ่ายจึงคมชัดครบถ้วน ในทุกรายละเอียด และให้ภาพวิดีโอ 4K ที่มีความละเอียดสูงกว่าวิดีโอระดับ HD 1080p ถึง 4 เท่า นอกจากนี้ก็ยังมีกล้อง FaceTime HD ใหม่ ความละเอียด 5 เมกะพิกเซล ที่ทำให้ตอนนี้ iPhone 6s สามารถถ่ายเซลฟี่ได้สวยในคุณภาพไม่แพ้ภาพถ่ายพอร์ตเทรตเลย อีกอย่าง คือขอแนะนำ Live Photos วิถีใหม่แห่งการชุบชีวิตให้กับความทรงจำที่คุณประทับใจ ซึ่งเป็นคุณสมบัติที่จะเก็บช่วงเวลาก่อนและหลังจากที่คุณถ่ายรูปเอาไว้ด้วย และทำให้รูปนั้นเคลื่อนไหวได้ง่ายๆ เพียงแค่ใช้นิ้วกดเท่านั้น</p>
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-12"><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-5.jpg" alt="iPhone 6s (128GB)" /></div>
</div>
</div>
<div class="row" style="margin-top: 40px;">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10" style="text-align: center;">
<h2>เทคโนโลยี</h2>
<h1>A9 ชิพที่ล้ำหน้าที่สุด เท่าที่เคยมีมาในสมาร์ทโฟน</h1>
<div class="col-sm-1">&nbsp;</div>
</div>
</div>
<div class="row">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10" style="text-align: center;">
<p>iPhone 6s ขับเคลื่อนอย่างเต็มกำลังด้วยชิพ A9 แบบ 64 บิตที่ออกแบบมาโดยเฉพาะ ซึ่งโดยทั่วไปประสิทธิภาพระดับนี้จะพบได้ก็แต่ในคอมพิวเตอร์เดสก์ท็อปเท่านั้น เตรียมพบกับประสิทธิภาพ CPU ที่เร็วขึ้น 70% รวมถึงประสิทธิภาพ GPU ที่เร็วขึ้น 90% ในทุกเกมและแอพโปรดที่เน้นกราฟิกหนักๆ ได้เลย รับรองว่าเต็มตาเต็มอารมณ์แน่ๆ</p>
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-12"><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-6.jpg" alt="iPhone 6s (128GB)" /></div>
</div>
</div>
<div class="row">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-3" style="line-height: 24px; text-align: center;">
<p>สถาปัตยกรรม</p>
<p style="font-size: 57px;">64บิต</p>
<p>ระดับเดสก์ท็อป</p>
</div>
<div class="col-sm-3" style="line-height: 24px; text-align: center;">
<p>CPU เร็วขึ้นสูงสุด</p>
<p style="font-size: 57px;">70%</p>
</div>
<div class="col-sm-3" style="line-height: 24px; text-align: center;">
<p>GPU เร็วขึ้นสูงสูด</p>
<p style="font-size: 57px;">90%</p>
</div>
</div>
<div class="row" style="margin-top: 40px;">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10" style="text-align: center;">
<h2>การออกแบบ</h2>
<h1>ดีไซน์อันก้าวล้ำ ลงลึกสู่อีกขั้นที่เหนือกว่า</h1>
<div class="col-sm-1">&nbsp;</div>
</div>
</div>
<div class="row">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10" style="text-align: center;">
<p>แม้นวัตกรรมจะเป็นสิ่งที่ไม่อาจมองเห็นได้ด้วยตาเปล่าเสมอไป แต่ถ้าคุณลองมอง iPhone 6s ให้ชัดๆ และลึกลงไปอีกนิด คุณจะพบว่านี่คือนวัตกรรมที่ได้รับการพัฒนา มาตั้งแต่พื้นฐาน ทั้งตัวเครื่องก็ผลิตขึ้นจากอะลูมิเนียมซีรีส์ 7000 ซึ่งเป็นเกรดเดียว กับที่ใช้ในอุตสาหกรรมอวกาศ ส่วนกระจกจอภาพก็เป็นกระจกที่แข็งแรงและทนทาน ที่สุดในบรรดาสมาร์ทโฟนต่างๆ และวันนี้ก็ยังมีสีใหม่ล่าสุดอย่างสีโรสโกลด์ มาเพิ่มเติมจากสีเทาสเปซเกรย์ สีเงิน และสีทอง</p>
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-12"><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-7.jpg" alt="iPhone 6s (128GB)" /></div>
</div>
</div>
<div class="row" style="margin-top: 40px; background-color: #fafafa;">
<div class="col-sm-5">
<h2>Touch ID</h2>
<h1>ความปลอดภัย อันล้ำหน้า อยู่ใกล้ แค่ปลายนิ้วคุณ</h1>
<p>ปลดล็อคโทรศัพท์ของคุณได้อย่างง่ายดาย และปลอดภัยด้วย Touch ID ที่วันนี้ใช้เซ็นเซอร์ ลายนิ้วมือสุดล้ำที่ทั้งเร็วและดียิ่งกว่าที่เคย</p>
</div>
<div class="col-sm-6"><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-8.jpg" alt="iPhone 6s (128GB)" /></div>
</div>
<div class="row" style="margin-top: 40px;">
<div class="col-sm-6"><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-9.jpg" alt="iPhone 6s (128GB)" /></div>
<div class="col-sm-5">
<h2>ระบบไร้สาย</h2>
<h1>4G LTE ที่เร็วกว่า Wi-Fi ที่เร็วขึ้น</h1>
<p>iPhone 6s มาพร้อมกับ 4G LTE Advanced ที่เร็วกว่ารุ่นก่อนหน้าถึง 2 เท่า* แถมยังสามารถ รองรับย่านความถี่ LTE ได้มากกว่าสมาร์ทโฟนอื่นๆ และเมื่อคุณเชื่อมต่อกับ Wi‑Fi ก็ยอดเยี่ยมไม่ต่างกัน เพราะ iPhone 6s ก็ยังให้คุณทำสิ่งต่างๆ อย่าง การท่องเว็บ และดาวน์โหลดแอพด้วยความเร็ว ที่เหนือกว่าเดิมถึง 2 เท่าด้วย</p>
</div>
</div>
<div class="row" style="margin-top: 40px;">
<div class="col-sm-5">
<h2>iOS 9</h2>
<h1>ประสบการณ์ ที่ไม่เหมือนใคร บนโทรศัพท์ ที่ไม่มีใครเหมือน</h1>
<p>ยากที่จะปฏิเสธว่าวันนี้ iOS 9 คือระบบปฏิบัติการ บนมือถือที่ล้ำหน้า ชาญฉลาด และปลอดภัยที่สุด ในโลก เพราะอัดแน่นไปด้วยแอพใหม่ๆ อันทรงพลัง ที่มาพร้อมเครื่อง คุณสมบัติใหม่ๆ ที่ล้ำหน้าใน Siri และ การปรับปรุงทั่วทั้งระบบที่ทำให้ทุกอย่างฉลาดขึ้นและ ขาดไม่ได้ยิ่งกว่าครั้งไหนๆ และด้วยการผสานรวมกัน อย่างล้ำลึกกับฮาร์ดแวร์ของ Apple ก็ยิ่งทำให้ทุกสิ่ง ทุกอย่างทำงานร่วมกันได้อย่างสวยงามลงตัว นอกเหนือจากนั้นก็ยังมี App Store ที่เต็มไปด้วย แอพอันน่าทึ่งที่ออกแบบมาเพื่อใช้ประโยชน์สูงสุด จากศักยภาพของ iPhone ด้วย</p>
</div>
<div class="col-sm-6"><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-10.jpg" alt="iPhone 6s (128GB)" /></div>
</div>
<div class="row" style="margin-top: 40px;">
<div class="col-sm-5" style="padding-right: 50px;">
<div><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-12.jpg" alt="iPhone 6s (128GB)" />
<div class="caption">
<h3>สรุป</h3>
<p>iPhone 6s มีทั้งสีทอง สีเงิน สีเทาสเปซเกรย์ และสีโรสโกลด์ มาพร้อมชิพ A9, 3D Touch, ระบบไร้สาย 4G LTE ความเร็วสูง, กล้อง iSight ความละเอียด 12 เมกะพิกเซล และ iOS 9</p>
</div>
<div class="caption">
<h3>ความจุ</h3>
<p>16GB / 64GB / 128GB</p>
</div>
<div class="caption">
<h3>จอภาพ Retina HD พร้อม 3D Touch</h3>
<ul>
<li>จอภาพ Multi-Touch ไวด์สกรีน แบ็คไลท์แบบ LED รุ่นใหม่ ขนาด 4.7 นิ้ว (แนวทแยง) พร้อมเทคโนโลยี IPS และ Taptic Engine</li>
<li>ความละเอียด 1334 x 750 พิกเซลที่ 326 ppi</li>
<li>อัตราส่วนคอนทราสต์ 1400:1 (ทั่วไป)</li>
<li>ความสว่างสูงสุด 500 cd/m2 (ทั่วไป)</li>
<li>มาตรฐาน sRGB เต็มช่วงสี</li>
<li>พิกเซลโดเมนคู่ (Dual-domain) เพื่อการมองในมุมที่กว้างขึ้น</li>
<li>เคลือบสารกันรอยนิ้วมือ</li>
<li>รองรับการแสดงผลหลายภาษาและตัวอักษรหลายแบบพร้อมกัน</li>
<li>คุณสมบัติแสดงการซูม</li>
<li>คุณสมบัติการดึงจอลงเพื่อแตะ (Reachability)</li>
</ul>
</div>
<div class="caption">
<h3>น้ำหนักและขนาด</h3>
<ul>
<li>ความสูง 138.3 มม. (5.44 นิ้ว)</li>
<li>ความกว้าง 67.1 มม. (2.64 นิ้ว)</li>
<li>ความหนา 7.1 มม. (0.28 นิ้ว)</li>
<li>น้ำหนัก 143 กรัม (5.04 ออนซ์)</li>
</ul>
</div>
<div class="caption">
<h3>ชิพ</h3>
<p>ชิพ A9 พร้อมสถาปัตยกรรม 64 บิต โปรเซสเซอร์ร่วม M9 สำหรับประมวลผลการเคลื่อนไหวในตัว</p>
</div>
<div class="caption">
<h3>ระบบเซลลูลาร์และระบบไร้สาย</h3>
<ul>
<li>GSM/EDGE</li>
<li>UMTS/HSPA+</li>
<li>DC-HSDPA</li>
<li>CDMA EV-DO Rev. A</li>
</ul>
<ul>
<li>4G LTE Advanced</li>
</ul>
<ul>
<li>Wi-Fi มาตรฐาน 802.11a/b/g/n/ac พร้อม MIMO</li>
</ul>
<ul>
<li>GPS และ GLONASS</li>
</ul>
</div>
<div class="caption">
<h3>Touch ID</h3>
<p>เซ็นเซอร์ลายนิ้วมือรุ่นที่ 2 ติดตั้งอยู่ในปุ่มโฮม</p>
</div>
<div class="caption">
<h3>กล้อง iSight</h3>
<ul>
<li>กล้อง iSight ความละเอียด 12 เมกะพิกเซล ด้วยพิกเซลขนาด 1.22&micro;</li>
<li>รูรับแสงขนาด &fnof;/2.2</li>
<li>คุณสมบัติ Live Photos</li>
<li>Local Tone Mapping ที่ได้รับการปรับปรุง</li>
<li>การลดนอยซ์ที่ได้รับการปรับปรุง</li>
<li>ผลึกแซฟไฟร์ ป้องกันหน้าเลนส์</li>
<li>แฟลช True Tone</li>
<li>เซ็นเซอร์รับแสงด้วยส่วนหลัง</li>
<li>ชุดเลนส์ห้าชิ้น</li>
<li>ฟิลเตอร์ Hybrid IR</li>
<li>ออโต้โฟกัสพร้อม Focus Pixels</li>
<li>ระบบการแตะเพื่อโฟกัสด้วย Focus Pixels</li>
<li>คุณสมบัติควบคุมค่าแสง</li>
<li>HDR อัตโนมัติสำหรับภาพถ่าย</li>
<li>ระบบตรวจจับใบหน้า</li>
<li>พาโนรามา (สูงสุด 63 เมกะพิกเซล)</li>
<li>ระบบป้องกันภาพสั่นไหวอัตโนมัติ</li>
<li>โหมดภาพถ่ายต่อเนื่อง</li>
<li>โหมดตั้งเวลาถ่ายภาพ</li>
<li>แนบข้อมูลพิกัดตำแหน่งในภาพถ่าย</li>
</ul>
</div>
<div class="caption">
<h3>การบันทึกวิดีโอ</h3>
<ul>
<li>บันทึกวิดีโอระดับ 4K (3840 x 2160) ที่ 30 fps</li>
<li>บันทึกวิดีโอระดับ HD 1080p ที่ 30 fps หรือ 60 fps</li>
<li>แฟลช True Tone</li>
<li>รองรับวิดีโอสโลว์โมชั่น ความละเอียด 1080p ที่ 120 fps และ 720p ที่ 240 fps</li>
<li>วิดีโอไทม์แลปส์ พร้อมระบบป้องกันภาพสั่นไหว</li>
<li>ระบบป้องกันภาพวิดีโอสั่นไหวในคุณภาพระดับภาพยนตร์</li>
<li>วิดีโอออโต้โฟกัสแบบต่อเนื่อง</li>
<li>ถ่ายภาพนิ่งความละเอียด 8 เมกะพิกเซล ขณะบันทึกวิดีโอ 4K</li>
<li>ซูมขณะเล่น</li>
<li>ระบบตรวจจับใบหน้า</li>
<li>ซูม 3 เท่า</li>
<li>แนบข้อมูลพิกัดตำแหน่งในวิดีโอ</li>
</ul>
</div>
<div class="caption">
<h3>กล้อง FaceTime</h3>
<ul>
<li>รูปถ่าย 5 เมกะพิกเซล</li>
<li>รูรับแสงขนาด &fnof;/2.2</li>
<li>Retina Flash</li>
<li>บันทึกวิดีโอระดับ HD 720p</li>
<li>HDR อัตโนมัติสำหรับภาพถ่ายและวิดีโอ</li>
<li>เซ็นเซอร์รับแสงด้วยส่วนหลัง</li>
<li>ระบบตรวจจับใบหน้า</li>
<li>โหมดภาพถ่ายต่อเนื่อง</li>
<li>คุณสมบัติควบคุมค่าแสง</li>
<li>โหมดตั้งเวลาถ่ายภาพ</li>
</ul>
</div>
<div class="caption">
<h3>การวิดีโอคอล</h3>
<ul>
<li>FaceTime แบบวิดีโอ</li>
<li>วิดีโอคอลผ่าน Wi-Fi หรือเซลลูลาร์ไปยังอุปกรณ์ทุกชนิดที่ใช้ FaceTime ได้</li>
</ul>
</div>
<div class="caption">
<h3>การออดิโอคอล</h3>
<ul>
<li>FaceTime แบบเสียง</li>
<li>ระหว่าง iPhone 6s Plus กับอุปกรณ์ที่รองรับ FaceTime แบบเสียงผ่าน Wi-Fi หรือเซลลูลาร์</li>
</ul>
</div>
<div class="caption">
<h3>การเล่นเสียง</h3>
<h4>รูปแบบไฟล์เสียงที่รองรับ</h4>
<p>AAC (8 ถึง 320 Kbps), Protected AAC (จาก iTunes Store), HE-AAC, MP3 (8 ถึง 320 Kbps), MP3 VBR, Audible (formats 2, 3, 4, Audible Enhanced Audio, AAX และ AAX+), Apple Lossless, AIFF และ WAV ผู้ใช้สามารถกำหนดระดับเสียงสูงสุดเองได้</p>
</div>
<div class="caption">
<h3>ทีวีและวิดีโอ</h3>
<p>การเชื่อมต่อภาพระหว่างหน้าจอด้วย AirPlay การแสดงผลรูปภาพ เสียง และวิดีโอไปยัง Apple TV (รุ่นที่ 2 หรือใหม่กว่า)</p>
<p>การรองรับการเชื่อมต่อภาพระหว่างหน้าจอและการแสดงผลวิดีโอ: สูงสุด 1080p ผ่าน Lightning Digital AV Adapter และ Lightning to VGA Adapter (อะแดปเตอร์จำหน่ายแยกต่างหาก)</p>
<p>รูปแบบไฟล์วิดีโอที่รองรับ: วิดีโอ H.264 สูงถึง 4K, 30 เฟรมต่อวินาที, High Profile ระดับ 4.2 พร้อมระบบเสียง AAC-LC สูงถึง 160 Kbps, 48kHz, ระบบเสียงสเตอริโอสำหรับไฟล์ .m4v, .mp4 และ .mov, วิดีโอ MPEG-4 สูงถึง 2.5 Mbps, 640 x 480 พิกเซล, 30 เฟรมต่อวินาที, Simple Profile พร้อมระบบเสียง AAC-LC สูงถึง 160 Kbps ต่อช่องสัญญาณ, 48kHz, ระบบเสียงสเตอริโอสำหรับไฟล์ .m4v, .mp4 และ .mov, Motion JPEG (M-JPEG) สูงถึง 35 Mbps, 1280 x 720 พิกเซล, 30 เฟรมต่อวินาที, เสียงระบบ ulaw, ระบบเสียงสเตอริโอ PCM ในรูปแบบไฟล์ .avi</p>
</div>
<div class="caption">
<h3>Siri</h3>
<ul>
<li>ใช้เสียงส่งข้อความ ตั้งระบบช่วยเตือนความจำ และอีกมากมาย</li>
<li>รับคำแนะนำล่วงหน้า</li>
<li>ใช้งานแบบแฮนด์ฟรี</li>
<li>ฟังและระบุชื่อเพลง</li>
</ul>
</div>
<div class="caption">
<h3>พลังงานและแบตเตอรี่</h3>
<ul>
<li>แบตเตอรี่ลิเธียมไอออนชนิดชาร์จซ้ำได้ภายในตัวเครื่อง</li>
<li>ชาร์จจากเครื่องคอมพิวเตอร์หรืออะแดปเตอร์แปลงไฟผ่านสาย USB</li>
<li>สูงสุด 14 ชั่วโมงเมื่อเชื่อมต่อ 3G</li>
<li>ระยะเวลาสแตนด์บาย: สูงสุด 10 วัน</li>
<li>การใช้งานอินเทอร์เน็ต: สูงสุด 10 ชั่วโมงเมื่อเชื่อมต่อ 3G, สูงสุด 10 ชั่วโมงเมื่อเชื่อมต่อ 4G LTE, สูงสุด 11 ชั่วโมงเมื่อเชื่อมต่อ Wi-Fi</li>
<li>การเล่นวิดีโอ HD: สูงสุด 11 ชั่วโมง</li>
<li>การเล่นเสียง: สูงสุด 50 ชั่วโมง</li>
</ul>
</div>
<div class="caption">
<h3>ชุดหูฟัง</h3>
<ul>
<li>Apple EarPods พร้อมรีโมทและไมโครโฟน</li>
<li>ที่เก็บและกล่องพกพา</li>
</ul>
</div>
<div class="caption">
<h3>เซ็นเซอร์</h3>
<ul>
<li>Gyro 3 แกน</li>
<li>อุปกรณ์ตรวจจับ การเคลื่อนไหว</li>
<li>ระบบตรวจจับระยะ</li>
<li>ระบบปรับความสว่างหน้าจออัตโนมัติ</li>
<li>บารอมิเตอร์</li>
</ul>
</div>
<div class="caption">
<h3>ซิมการ์ด</h3>
<p>Nano-SIM iPhone 6s ไม่รองรับการ์ด Micro-SIM ที่มีอยู่ในขณะนี้</p>
</div>
<div class="caption">
<h3>สายเชื่อมต่อ</h3>
<p>Lightning</p>
</div>
</div>
</div>
<div class="col-sm-5 col-sm-offset-" style="border-left: 1px solid #ddd; padding-left: 50px;">
<div><img class="img-responsive" title="iPhone 6s (128GB)" src="uploads/productdetail/iphone-6s/iphone-6s-13.jpg" alt="iPhone 6s (128GB)" />
<div class="caption">
<h3>สรุป</h3>
<p>iPhone 6s Plus มีทั้งสีทอง สีเงิน สีเทาสเปซเกรย์ และสีโรสโกลด์ มาพร้อมชิพ A9, 3D Touch, ระบบไร้สาย 4G LTE ความเร็วสูง, กล้อง iSight ความละเอียด 12 เมกะพิกเซล และ iOS 9</p>
</div>
<div class="caption">
<h3>ความจุ</h3>
<p>16GB / 64GB / 128GB</p>
</div>
<div class="caption">
<h3>จอภาพ Retina HD พร้อม 3D Touch</h3>
<ul>
<li>จอภาพ Multi-Touch ไวด์สกรีน แบ็คไลท์แบบ LED รุ่นใหม่ ขนาด 5.5 นิ้ว (แนวทแยง) พร้อมเทคโนโลยี IPS และ Taptic Engine</li>
<li>ความละเอียด 1920 x 1080 พิกเซลที่ 401 ppi</li>
<li>อัตราส่วนคอนทราสต์ 1300:1 (ทั่วไป)</li>
<li>ความสว่างสูงสุด 500 cd/m2 (ทั่วไป)</li>
<li>มาตรฐาน sRGB เต็มช่วงสี</li>
<li>พิกเซลโดเมนคู่ (Dual-domain) เพื่อการมองในมุมที่กว้างขึ้น</li>
<li>เคลือบสารกันรอยนิ้วมือ</li>
<li>รองรับการแสดงผลหลายภาษาและตัวอักษรหลายแบบพร้อมกัน</li>
<li>คุณสมบัติแสดงการซูม</li>
<li>คุณสมบัติการดึงจอลงเพื่อแตะ (Reachability)</li>
</ul>
</div>
<div class="caption">
<h3>น้ำหนักและขนาด</h3>
<ul>
<li>ความสูง 158.2 มม. (6.23 นิ้ว)</li>
<li>ความกว้าง 77.9 มม. (3.07 นิ้ว)</li>
<li>ความหนา 7.3 มม. (0.29 นิ้ว)</li>
<li>น้ำหนัก 192 กรัม (6.77 ออนซ์)</li>
</ul>
</div>
<div class="caption">
<h3>ชิพ</h3>
<p>ชิพ A9 พร้อมสถาปัตยกรรม 64 บิต โปรเซสเซอร์ร่วม M9 สำหรับประมวลผลการเคลื่อนไหวในตัว</p>
</div>
<div class="caption">
<h3>ระบบเซลลูลาร์และระบบไร้สาย</h3>
<ul>
<li>GSM/EDGE</li>
<li>UMTS/HSPA+</li>
<li>DC-HSDPA</li>
<li>CDMA EV-DO Rev. A</li>
</ul>
<ul>
<li>4G LTE Advanced</li>
</ul>
<ul>
<li>Wi-Fi มาตรฐาน 802.11a/b/g/n/ac พร้อม MIMO</li>
</ul>
<ul>
<li>GPS และ GLONASS</li>
</ul>
</div>
<div class="caption">
<h3>Touch ID</h3>
<p>เซ็นเซอร์ลายนิ้วมือรุ่นที่ 2 ติดตั้งอยู่ในปุ่มโฮม</p>
</div>
<div class="caption">
<h3>กล้อง iSight</h3>
<ul>
<li>กล้อง iSight ความละเอียด 12 เมกะพิกเซล ด้วยพิกเซลขนาด 1.22&micro;</li>
<li>รูรับแสงขนาด &fnof;/2.2</li>
<li>คุณสมบัติ Live Photos</li>
<li>ระบบป้องกันภาพสั่นไหวแบบออปติคอล</li>
<li>Local Tone Mapping ที่ได้รับการปรับปรุง</li>
<li>การลดนอยซ์ที่ได้รับการปรับปรุง</li>
<li>ผลึกแซฟไฟร์ ป้องกันหน้าเลนส์</li>
<li>แฟลช True Tone</li>
<li>เซ็นเซอร์รับแสงด้วยส่วนหลัง</li>
<li>ชุดเลนส์ห้าชิ้น</li>
<li>ฟิลเตอร์ Hybrid IR</li>
<li>ออโต้โฟกัสพร้อม Focus Pixels</li>
<li>ระบบการแตะเพื่อโฟกัสด้วย Focus Pixels</li>
<li>คุณสมบัติควบคุมค่าแสง</li>
<li>HDR อัตโนมัติสำหรับภาพถ่าย</li>
<li>ระบบตรวจจับใบหน้า</li>
<li>พาโนรามา (สูงสุด 63 เมกะพิกเซล)</li>
<li>ระบบป้องกันภาพสั่นไหวอัตโนมัติ</li>
<li>โหมดภาพถ่ายต่อเนื่อง</li>
<li>โหมดตั้งเวลาถ่ายภาพ</li>
<li>แนบข้อมูลพิกัดตำแหน่งในภาพถ่าย</li>
</ul>
</div>
<div class="caption">
<h3>การบันทึกวิดีโอ</h3>
<ul>
<li>บันทึกวิดีโอระดับ 4K (3840 x 2160) ที่ 30 fps</li>
<li>บันทึกวิดีโอระดับ HD 1080p ที่ 30 fps หรือ 60 fps</li>
<li>แฟลช True Tone</li>
<li>ระบบป้องกันภาพสั่นไหวแบบออปติคอลสำหรับวิดีโอ</li>
<li>รองรับวิดีโอสโลว์โมชั่น ความละเอียด 1080p ที่ 120 fps และ 720p ที่ 240 fps</li>
<li>วิดีโอไทม์แลปส์ พร้อมระบบป้องกันภาพสั่นไหว</li>
<li>ระบบป้องกันภาพวิดีโอสั่นไหวในคุณภาพระดับภาพยนตร์</li>
<li>วิดีโอออโต้โฟกัสแบบต่อเนื่อง</li>
<li>ถ่ายภาพนิ่งความละเอียด 8 เมกะพิกเซล ขณะบันทึกวิดีโอ 4K</li>
<li>ซูมขณะเล่น</li>
<li>ระบบตรวจจับใบหน้า</li>
<li>ซูม 3 เท่า</li>
<li>แนบข้อมูลพิกัดตำแหน่งในวิดีโอ</li>
</ul>
</div>
<div class="caption">
<h3>กล้อง FaceTime</h3>
<ul>
<li>รูปถ่าย 5 เมกะพิกเซล</li>
<li>รูรับแสงขนาด &fnof;/2.2</li>
<li>Retina Flash</li>
<li>บันทึกวิดีโอระดับ HD 720p</li>
<li>HDR อัตโนมัติสำหรับภาพถ่ายและวิดีโอ</li>
<li>เซ็นเซอร์รับแสงด้วยส่วนหลัง</li>
<li>ระบบตรวจจับใบหน้า</li>
<li>โหมดภาพถ่ายต่อเนื่อง</li>
<li>คุณสมบัติควบคุมค่าแสง</li>
<li>โหมดตั้งเวลาถ่ายภาพ</li>
</ul>
</div>
<div class="caption">
<h3>การวิดีโอคอล</h3>
<ul>
<li>FaceTime แบบวิดีโอ</li>
<li>วิดีโอคอลผ่าน Wi-Fi หรือเซลลูลาร์ไปยังอุปกรณ์ทุกชนิดที่ใช้ FaceTime ได้</li>
</ul>
</div>
<div class="caption">
<h3>การออดิโอคอล</h3>
<ul>
<li>FaceTime แบบเสียง</li>
<li>ระหว่าง iPhone 6s กับอุปกรณ์ที่รองรับ FaceTime แบบเสียงผ่าน Wi-Fi หรือเซลลูลาร์</li>
</ul>
</div>
<div class="caption">
<h3>การเล่นเสียง</h3>
<h4>รูปแบบไฟล์เสียงที่รองรับ</h4>
<p>AAC (8 ถึง 320 Kbps), Protected AAC (จาก iTunes Store), HE-AAC, MP3 (8 ถึง 320 Kbps), MP3 VBR, Audible (formats 2, 3, 4, Audible Enhanced Audio, AAX และ AAX+), Apple Lossless, AIFF และ WAV ผู้ใช้สามารถกำหนดระดับเสียงสูงสุดเองได้</p>
</div>
<div class="caption">
<h3>ทีวีและวิดีโอ</h3>
<p>การเชื่อมต่อภาพระหว่างหน้าจอด้วย AirPlay การแสดงผลรูปภาพ เสียง และวิดีโอไปยัง Apple TV (รุ่นที่ 2 หรือใหม่กว่า)</p>
<p>การรองรับการเชื่อมต่อภาพระหว่างหน้าจอและการแสดงผลวิดีโอ: สูงสุด 1080p ผ่าน Lightning Digital AV Adapter และ Lightning to VGA Adapter (อะแดปเตอร์จำหน่ายแยกต่างหาก)</p>
<p>รูปแบบไฟล์วิดีโอที่รองรับ: วิดีโอ H.264 สูงถึง 4K, 30 เฟรมต่อวินาที, High Profile ระดับ 4.2 พร้อมระบบเสียง AAC-LC สูงถึง 160 Kbps, 48kHz, ระบบเสียงสเตอริโอสำหรับไฟล์ .m4v, .mp4 และ .mov, วิดีโอ MPEG-4 สูงถึง 2.5 Mbps, 640 x 480 พิกเซล, 30 เฟรมต่อวินาที, Simple Profile พร้อมระบบเสียง AAC-LC สูงถึง 160 Kbps ต่อช่องสัญญาณ, 48kHz, ระบบเสียงสเตอริโอสำหรับไฟล์ .m4v, .mp4 และ .mov, Motion JPEG (M-JPEG) สูงถึง 35 Mbps, 1280 x 720 พิกเซล, 30 เฟรมต่อวินาที, เสียงระบบ ulaw, ระบบเสียงสเตอริโอ PCM ในรูปแบบไฟล์ .avi</p>
</div>
<div class="caption">
<h3>Siri</h3>
<ul>
<li>ใช้เสียงส่งข้อความ ตั้งระบบช่วยเตือนความจำ และอีกมากมาย</li>
<li>รับคำแนะนำล่วงหน้า</li>
<li>ใช้งานแบบแฮนด์ฟรี</li>
<li>ฟังและระบุชื่อเพลง</li>
</ul>
</div>
<div class="caption">
<h3>พลังงานและแบตเตอรี่</h3>
<ul>
<li>แบตเตอรี่ลิเธียมไอออนชนิดชาร์จซ้ำได้ภายในตัวเครื่อง</li>
<li>ชาร์จจากเครื่องคอมพิวเตอร์หรืออะแดปเตอร์แปลงไฟผ่านสาย USB</li>
<li>ระยะเวลาสนทนา: สูงสุด 24 ชั่วโมงเมื่อเชื่อมต่อ 3G</li>
<li>ระยะเวลาสแตนด์บาย: สูงสุด 16 วัน</li>
<li>การใช้งานอินเทอร์เน็ต: สูงสุด 12 ชั่วโมงเมื่อเชื่อมต่อ 3G, สูงสุด 12 ชั่วโมงเมื่อเชื่อมต่อ 4G LTE, สูงสุด 12 ชั่วโมงเมื่อเชื่อมต่อ Wi-Fi</li>
<li>การเล่นวิดีโอ HD: สูงสุด 14 ชั่วโมง</li>
<li>การเล่นเสียง: สูงสุด 80 ชั่วโมง</li>
</ul>
</div>
<div class="caption">
<h3>ชุดหูฟัง</h3>
<ul>
<li>Apple EarPods พร้อมรีโมทและไมโครโฟน</li>
<li>ที่เก็บและกล่องพกพา</li>
</ul>
</div>
<div class="caption">
<h3>เซ็นเซอร์</h3>
<ul>
<li>Gyro 3 แกน</li>
<li>อุปกรณ์ตรวจจับ การเคลื่อนไหว</li>
<li>ระบบตรวจจับระยะ</li>
<li>ระบบปรับความสว่างหน้าจออัตโนมัติ</li>
<li>บารอมิเตอร์</li>
</ul>
</div>
<div class="caption">
<h3>ซิมการ์ด</h3>
<p>Nano-SIM iPhone 6s ไม่รองรับการ์ด Micro-SIM ที่มีอยู่ในขณะนี้</p>
</div>
<div class="caption">
<h3>สายเชื่อมต่อ</h3>
<p>Lightning</p>
</div>
</div>
</div>
</div></div>
                            <div class="divclear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Product Detail Box End Here-->
            <!--Shipping Detail Box Start Here-->
            <div class="allauctions_container">
                <div class="allauctions_heading_row" style="width:980px;">
                    <div class="myaccount_heading_leftbg">&nbsp;</div>
                       <div class="static_pg_heading_middlebg" style="width:969px;">ค่าจัดส่ง</div>
                     <div class="myaccount_heading_rightbg">&nbsp;</div>
                </div>
                <div class="allauctions_contentbg" style="width:935px;">
                    <div class="shippingtitle" style="width:875px;">
                                <div>จัดส่งภายใน 7 - 10 วันทำการ&nbsp;฿50.00</div>
                                <div class="clear">&nbsp;</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!--Shipping Detail Box end Here-->
            <!--ShareThis Box Start Here-->
            <div class="allauctions_container">
                <div class="allauctions_heading_row" style="width:980px;">
                    <div class="myaccount_heading_leftbg">&nbsp;</div>
                       <div class="static_pg_heading_middlebg" style="width:969px;">Share the excitement!</div>
                     <div class="myaccount_heading_rightbg">&nbsp;</div>
                </div>
                <div class="allauctions_contentbg" style="width:935px;">
                    <div id="sharethis">
                    <!--ShareThis Box Start Here-->
                            <ul class="social-share">
                                                                <li class="facebook"><a target="_blank" href="https://www.facebook.com/sharer.php?u=https://www.dinoza.com/productdetails.php?aid=4496&t=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com" title="Share on Facebook!"><i class="fa fa-fw fa-facebook-square"></i></a></li>
                                <li class="twitter"><a target="_blank" href="https://twitter.com/home?status=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com: https://www.dinoza.com/productdetails.php?aid=4496" title="Share on Twitter!"><i class="fa fa-fw fa-twitter-square"></i></a></li>
                                <li class="google-plus"><a target="_blank" href="https://plus.google.com/share?url=https://www.dinoza.com/productdetails.php?aid=4496" title="Share on Google Plus!"><i class="fa fa-fw fa-google-plus-square"></i></a></li>
                                <li class="pinterest"><a target="_blank" href="https://pinterest.com/pin/create/button/?url=https://www.dinoza.com/productdetails.php?aid=4496&media=https://www.dinoza.com/uploads/products/popup/popup_3293ef9265b9ad5f01ce3eec36bfe1ac.jpg&description=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com" class="pin-it-button" count-layout="horizontal" title="Share on Pinterest"><i class="fa fa-fw fa-pinterest-square"></i></a></li>
                                <li class="email-share"><a title="Share by email" href="mailto:?subject=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com&body=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com https://www.dinoza.com/productdetails.php?aid=4496&title=Apple iPhone 6s (128GB) สิ่งเดียวที่เปลี่ยนไปคือ ทุกสิ่ง ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com"><i class="fa fa-fw fa-envelope"></i></a></li>
                            </ul>
                        <div class="clear"></div>
                    <!--ShareThis Box End Here-->
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!--ShareThis Box End Here-->
                  </div>
            </div>
        </div>
      </div>
			<div id="banner-sub" class="banner_main_box" style="margin-top: 15px; margin-bottom: 15px; min-height: 0;">
			    	<div class="banner" style="min-height: 0;">
					      <a href='dpoints?ref=homebnr'><img src="images/5-D-points-1040x218-3.jpg" style="width: 100%;" /></a>
				    </div>
				</div>

			  <div class="clearfix"></div>
			  <aside id="paymentmethods">
			    <div class="container">
			      <div class="row">
			        <div class="col-md-12">
			            <ul>
			                <li>
			                    <img src="images/01.png">
			                </li>
			                <li>
			        <!-- <script type="text/javascript">
			        function verifySeal() {
			        var bgHeight = "460";
			        var bgWidth = "593";
			        var url = "https:\/\/seal.godaddy.com\/verifySeal?sealID=CAIyHisel1UfdS00KDh93FjpdMGbag9tBqStk3NetmRvWeDg0w5uC";
			        window.open(url,'SealVerfication','menubar=no,toolbar=no,personalbar=no,location=yes,status=no,resizable=yes,fullscreen=no,scrollbars=no,width=' + bgWidth + ',height=' + bgHeight);
			      }
			        </script>
			        <span id="siteseal"><img style="cursor:pointer;cursor:hand" src="https://seal.godaddy.com/images/3/en/siteseal_gd_3_h_d_m.gif" onclick="verifySeal();" alt="SSL site seal - click to verify"></span></li>
			      </ul> -->
			            <div class="clearfix"></div>
			        </div>
			      </div>
			    </div>
			  </aside>
			<div class="clearfix"></div>



  <? include ('footer.php'); ?>
