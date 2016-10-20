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
                            <div class="static_pg_heading_middlebg"><h1 class="heading_product_name">  Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก  </h1>

                                                        <div class="heading_product_discount_main">
                            	<div class="heading_product_discount_title">ที่ Dinoza คุณประหยัดได้ถึง</div>
                                <div class="heading_product_discount_calculation">
                                	<div class="product_discount_buynow_price_calculation_main">
                                    	<div class="buynow_price_heading">ซื้อทันที</div>
                                        <div class="buynow_price_discount">50%</div>
                                    </div>
                                    <div class="product_discount_auction_price_calculation_main">
                                    	<div class="auction_price_heading">Bid ก่อนซื้อ</div>
                                        <div class="auction_price_discount"  style="font-size:22px;" >99%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="myaccount_heading_rightbg">&nbsp;</div>
                      </div>






                    <div class="product_details_content_bg" style="width:977px; margin-bottom:10px;">
                        <div class="product_details_content_inner" style="width:977px;">
                            <div class="product_details_inner_image" style="padding-left:13px;">
                                <div class="product_details_inner_image_detailbox" style="width:368px;">

                                    <div class="product_details_inner_image_body" id="detailbodymargin">
                                        <div class="product_details_inner_image_big">
                                                                                        <span id="mainimage1"><img src="uploads/products/popup/popup_0e7728446e9f3602993f534659bdb571.jpg" alt="" /></span>
                                                                                        <span id="mainimage2" style="display:none;"><img src="uploads/products/popup/popup_b776e10a56c401cd623af65d281d5840.jpg" alt=""/></span>
                                            <span id="mainimage3" style="display: none"><img src="uploads/products/popup/popup_de366ae2b7c352e4851bb9aa457f955b.jpg" alt="" /></span>
                                            <span id="mainimage4" style="display: none"><img src="uploads/products/popup/popup_f8cf54b9e5ae2e1e2e9f810af1435b64.jpg" alt=""/></span>
                                        </div>
                                        <div class="product_details_inner_image_thumb_top">

									<div class="product_details_inner_image_thumb_middle_bg">
												<div class="product_details_inner_image_thumb_middle_body">
                                                            <div class="product_details_inner_image_thumb_box"><img src="uploads/products/thumbs_small/thumbsmall_0e7728446e9f3602993f534659bdb571.jpg" onclick="changeimage(1);" id="otherimageprd_1" style="cursor: pointer" alt="" width="80" height="63" /></div>                                                            <div class="product_details_inner_image_thumb_box"><img src="uploads/products/thumbs_small/thumbsmall_b776e10a56c401cd623af65d281d5840.jpg" onclick="changeimage(2);" id="otherimageprd_2" style="cursor: pointer" alt="" width="80" height="63" /></div>                                                            <div class="product_details_inner_image_thumb_box"><img src="uploads/products/thumbs_small/thumbsmall_de366ae2b7c352e4851bb9aa457f955b.jpg" onclick="changeimage(3);" id="otherimageprd_3" style="cursor: pointer" alt="" width="80" height="63" /></div>                                                            <div class="product_details_inner_image_thumb_box"><img src="uploads/products/thumbs_small/thumbsmall_f8cf54b9e5ae2e1e2e9f810af1435b64.jpg" onclick="changeimage(4);" id="otherimageprd_4" style="cursor: pointer" alt="" width="80" height="63" /></div>                                                      </div>
							   <div id="auctiontypeicon" class="auction_image1">
																			 											 																													 											 																													 											 																													 											 																													 											 																													 											 											<a onmouseover="javascript:showhide_auctype(6,'over');" onmouseout="javascript:showhide_auctype(6,'out');" style="cursor:pointer"><img src="images/thai/buynow_big.png" title="สามารถซื้อสินค้าได้" alt="" /></a>&nbsp;
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
                                                        <li class="facebook"><a target="_blank" href="https://www.facebook.com/sharer.php?u=https://www.dinoza.com/productdetails.php?aid=4493&t=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com" title="Share on Facebook!"><i class="fa fa-fw fa-facebook-square"></i></a></li>
                                                        <li class="twitter"><a target="_blank" href="https://twitter.com/home?status=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com: https://www.dinoza.com/productdetails.php?aid=4493" title="Share on Twitter!"><i class="fa fa-fw fa-twitter-square"></i></a></li>
                                                        <li class="google-plus"><a target="_blank" href="https://plus.google.com/share?url=https://www.dinoza.com/productdetails.php?aid=4493" title="Share on Google Plus!"><i class="fa fa-fw fa-google-plus-square"></i></a></li>
                                                        <li class="pinterest"><a target="_blank" href="https://pinterest.com/pin/create/button/?url=https://www.dinoza.com/productdetails.php?aid=4493&media=https://www.dinoza.com/uploads/products/facebook/facebook_0e7728446e9f3602993f534659bdb571.png&description=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com" class="pin-it-button" count-layout="horizontal" title="Share on Pinterest"><i class="fa fa-fw fa-pinterest-square"></i></a></li>
                                                        <li class="email-share"><a title="Share by email" href="mailto:?subject=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com&body=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com https://www.dinoza.com/productdetails.php?aid=4493&title=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com"><i class="fa fa-fw fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                            <div class="clear"></div>
                                        <!--ShareThis Box End Here-->
                                        <div class="clear"></div>
                                    </div>

                                </div>
                            </div>
                            <input type="hidden" id="product_detail_inner_auction_flag_4493" value="1" />
                            <div class="product_details_inner_auction product_details_inner_auction_4493"  id="product_details_inner_auction_4493" >
                                                                                        <div class="auction-item" style="display: none" title="4493" id="auction_4493"></div>
                                                                    <div class="product_details_inner_auction_detailbox">

                                        <div class="product_details_inner_auction_body" id="detailbodymargin">

                                            <div class="product-detail-market-price-row">ลดจากราคา&nbsp;<span class="marketprice_det">฿1390</span></div>

                                            <div class="product-price-row">
                                            	<span class="product_price_row_top">ประมูล ประหยัดสูงสุด</span>
                                                <span class="product_price_row_bottom">99%</span>
                                            </div>


                                            <div class="detail-row" style="padding-top:10px;">
                                                <div class="textnew right1" style="font-size:24px; font-weight:bold;">
                                                <div class="detailtopprice-container">
                                                    <div class="detailtopprice_pd" style="padding-bottom:7px; height:25px; padding-top:0px; display:inline-block; #margin-top:-3px; color:#059E0E;" id="currencysymbol_4493">
                                                    </div><div class="detailtopprice_pd" id="price_index_page_4493" style=" padding-bottom:5px; height:27px; color:#059E0E; padding-top:0px; display:inline-block;">---</div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="detail-row">
                                                <div class="right1" style="width:313px; text-align:center; font-weight:bold; height:25px;"><span class="prod_biddertext" id="product_bidder_4493" style="color:#5B5B5B; width:313px; text-align:center; font-size:18px;">---</span>&nbsp;&nbsp;</div>
                                            </div>
                                            <div class="detail-row" style="margin-bottom:0px;">
                                                <div class="toptimer_prod" style="color:#666666">
                                                    <span id="counter_index_page_4493">

                                                    <script language=javascript>
                                                          document.getElementById('counter_index_page_4493').innerHTML = calc_counter_from_time('17452');
                                                    </script>

                                                  </span>
                                                </div>
                                            </div>

                                            <div class="detail-row">
                                                <div class="normal_text_small_new">
                                                	<span id="normal_text_bid_info_enable_4493" style="display:inline-block;top: -4px;">
                                                            จบ&nbsp;วันนี้                                                    </span>
                                                    <span id="every_bid_resets_clock_txt_4493" style="display:none;top: -4px;">ทุก Bid เพิ่ม 10วิ</span>
                                                    <input type="hidden" id="auction_resets_clock_txt_flag_4493" value="" />
                                                </div>
                                            </div>

                                            <div class="detail-row">
                                                                                                         <span class="btn btn-org btn-bid" alt="Bid" onclick="javascript: window.location.href='login.php?src=pdbidbtn'" id="image_main_4493">Bid<span class="badge bidmulti">x1</span></span>

                                                                                             </div>


                                            <!--<div class="detail-row">
                                                <div class="normal_text_small_new">กด Bid 1 ครั้งราคาเพิ่ม
                                                                                                    ฿0.10
                                                                                                </div>
                                            </div>-->

                                            <!--<div class="detail-row" style="padding-top: 8px;">
                                                <div class="left1">สินค้ามูลค่า :</div>
                                                <div class="right1">฿699.00</div>
                                            </div>-->
                                                                                        <!--<div class="detail-row">
                                                <div class="left1">ราคาคง :</div>
                                                <div class="right1">฿0.00</div>
                                            </div>-->
                                            <div class="detail-row" style="font-weight: bold;display:none;">
                                                <div class="left1">ประหยัด:</div>
                                                <div class="right1">฿<span id="placebidssavingdisp">699.00</span><span id="placebidscount" style="display: none;">699</span><span style="display: none;" id="placebidssaving">699</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prod-detailbox2">
                                                                                <div class="prod-detail-body2" id="detailbodymargin" style="height:190px;padding:5px 0;">

                                            <div class="product_detail_amount_info_heading_main">หรือซื้อทันที</div>

																																																																																																																																																																																																																																					                                            <!--<div class="auction-price-row" id="bndiscount" style="padding-bottom:2px;">
                                            	<div class="auction_price_row_top" style="padding-bottom:8px;">Dinoza ลดให้</div>
                                                <div class="auction_price_row_bottom">50%</div>
                                            </div>-->

                                            <div class="auction-price-row" id="bnsavings" style="text-align:center;margin-left:1px;width:49.5%;padding-bottom:2px;">
                                            	<div class="auction_price_row_top" style="text-align:center;width:100%;padding-bottom:0px;">Dinoza ลดให้ก่อน</div>
                                                <div class="auction_price_row_bottom" style="text-align:center;width:100%;">฿691</div>
                                            </div>

                                            <div class="auction-price-row tipper" id="bnrebate" style="margin-left:1px;padding-bottom:2px;width:49.5%;">
                                            	<div class="auction_price_row_top" style="text-align:center;width:100% !important;padding-bottom:0px;">D-Points ที่ได้รับ</div>
                                                <div class="auction_price_row_bottom" style="text-align:center;width:100% !important;"><span id="buynow_placebids_price">0</span></div>
                                                <div class="auction_price_row_below" style="text-align:center;width:100% !important;">มีมูลค่าเท่ากับ <span id="buynow_placebids_bottom">0</span> บาท</div>
                                                <span id="buynow_placebids_price_hid" style="display:none;">0.00</span>
                                                <!--<span class="tip">That's so cool bro!</span>-->
                                            </div>

                                            <div class="final_price_info">คุณจ่ายเพียง</div>
                                            <div class="detail-row">
                                            	<div class="final_buynow_price_savings">฿<span id="buynow_price_savings">699</span><span id="buynow_price_savings_hid" style="display:none;">699.00</span>
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
                                    <fb:like href="https://www.dinoza.com/productdetails.php?aid=4493" layout="box_count" width="175" send="false" ></fb:like>
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
                                    <!-- <div class="product_details_register-now-top">
                                        <div class="product_details_register-now-history-full"><div class="product_details_register-now-title">อย่าพลาดโอกาส!</div></div>
                                    </div>
                                    <div class="product_details_register-now-body" align="center">
                                    	<div class="product_details_register-inner-description">ยินดีต้อนรับเพื่อนๆสู่ Dinoza! เว็บไซต์ประมูล ความเร็วสูงกระเป๋าหนักแต่ราคาเบา ตื่นเต้น เฮฮา ฉับไว ทันใจที่ Dinoza เราไม่ปล่อยให้ใครกลับบ้านมือเปล่า ทันใจ ที่ Dinoza เราไม่ปล่อยให้ใครกลับบ้าน มือเปล่า!</div>
                                        <div class="product_details_register-inner-description">และที่สำคัญ ถ้าคุณสมัครตอนนี้ คุณจะได้รับ 10 Bid ฟรีทันที </div>
                                        <div class="product_details_register-inner-left-img"></div>

                                        <div class="product_details_register-now-inner-title" align="center">
                                        	<div style="float:left;">สมัครตอนนี้</div>
                                            <div class="product_details_register-now-inner-title-img"></div>
                                        </div>
                                        <div class="product_detail_register-now-inner-details"><span>Get 100 Baht discount just for signing up!</span><br />หรือใช้เป็นส่วนลด&nbsp;0&nbsp;บาท!</div>

                                        <div class="product_details_register-now-inner_button" align="center"><img src="images/thai/registernow.png" onclick="javascript: window.location.href='registration.php'" onmouseover="this.src='images/thai/registernow_hover.png'" onmouseout="this.src='images/thai/registernow.png'" style="cursor: pointer" alt="" /></div>

                                        <div style="display: none;"><img src="images/thai/Book_btn.png" border="0" id="bookbidbutlerbutton"  style="cursor: pointer" class="bookbidbutlerbutton" alt="" /></div>
                                    </div> -->

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
                                                                                                                    ฿1.10
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
                                                                                                                    &nbsp;
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidder" id="bid_user_name_1">
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidtype" id="bid_type_1">
                                                                                                            </div>
                                                </div>
                                                                                            <div class="product_detail_bidhistory_inner_main">
                                                    <div class="product_detail_bidhistory_inner_bid" id="bid_price_2">
                                                                                                                    &nbsp;
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidder" id="bid_user_name_2">
                                                                                                            </div>
                                                    <div class="product_detail_bidhistory_inner_bidtype" id="bid_type_2">
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
                 <!--                     <div style="float:left; width:980px;">
                                                                          <div class="soldpro_box" style="padding:0px;height:170px;width:306px;border:none;margin:0 24px 12px 0;">
                                                            <a href="https://www.dinoza.com" target="_blank"><img src="uploads/productdetail_banner/f25154545431ba79718f8d017fde83f3.png" border="0" title="https://www.dinoza.com" /></a>
                                                    </div>
                                                                            <div class="soldpro_box" style="padding:0px;height:170px;width:306px;border:none;margin:0 24px 12px 0;">
                                                            <a href="https://www.dinoza.com" target="_blank"><img src="uploads/productdetail_banner/1ad7702a89d103fe15655c41644bad21.jpg" border="0" title="https://www.dinoza.com" /></a>
                                                    </div>
                                                                            <div class="soldpro_box" style="padding:0px;height:170px;width:306px;border:none;margin:0 24px 12px 0;margin:0px">
                                                            <img src="uploads/productdetail_banner/9846c6d68c63fe1ad76a6411e1b9c3ad.jpg" border="0" title="" />
                                                    </div>
                                                                    </div>
                   -->
             </div>

			 			 <!--Product Detail Testimonial Start-->
             <div class="alltestimonial_container_main">
             	<div class="alltesetimonial_container_image">
                	<div class="testimonialvideo">
                	                                                	<img src="uploads/testimonial/1463382550_IMG_20160516_3.jpg" width="196" height="156" />
                            <div class="alltestimonial_username">mollyarty</div>
                                                                </div>
                </div>
                <div class="alltestimonial_thatsbigbargain">ซื้อได้ถูกจริง อะไรจริง!</div>
                <div class="recent_ended_auction_since_launch"><a href="winners" class="recent_ended_auction_since_launch">ดูอีก&nbsp;<strong>3797</strong>&nbsp;คนที่ได้ราคาดีขนาดนี้</a></div>
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
				                <!-- PID 408 -->
				<div class="allauctions_container" style="width:980px;">
                  <div class="allauctions_heading_row" style="width:980px;">
                    <div class="myaccount_heading_leftbg">&nbsp;</div>
                        <div class="static_pg_heading_middlebg">รายละเอียดสินค้า</div>
						<span class="history_auctionid" id="history_auctionid">4493</span><span class="item_no" id="item_no" style="position:absolute;top:0;right:55px;float:right;font-size: 20px;background:#eee;padding: 4px 0 4px 8px;">Item #</span>
                    <div class="myaccount_heading_rightbg">&nbsp;</div>
                </div>
                <div class="allauctions_contentbg">
                    <div class="product_detail_body_middle">
                    <div class="product_details_desc_box">
                            <h2>Eloop E13 Power Bank (13000 mAh) ลายไม้</h2>                            <p class="intro">ดีไซด์สวยด้วยวัตถุที่แข็งแรงคงทน รองรับกับอุปกรณ์เครื่องใช้ไฟฟ้าที่ชาร์จไฟผ่าน USB Port จอ LED แสดงสถานะของพลังงานที่เหลืออยู่ และสามารถดูได้ในที่มืด ผ่านการผลิตที่เป็นมาตรฐานสากล CE / FCC / RoHS</p>
                            <div class="product_details_desc booted"><div class="row">
<div class="col-sm-5"><img class="img-responsive" title="Eloop E13 Power Bank (13000 mAh) Wood" src="uploads/productdetail/Eloop-E13-Wood/Eloop-E13-Wood-1.jpg" alt="Eloop E13 Power Bank (13000 mAh) Wood" /></div>
<div class="col-sm-6">
<h3>ข้อมูลเชิงเทคนิค:</h3>
<ul>
<li>ความจุแบตเตอรี: 13000 mAh</li>
<li>Input current: 5.0V 1A</li>
<li>ช่อง USB Output 1 &amp; 2: 5V 1A (max), 5V 2.1A (max)</li>
<li>Standby time: &gt;5,000 ชั่วโมง</li>
<li>ระยะเวลาในการชาร์จ: 13 ชั่วโมง</li>
<li>น้ำหนัก 274 กรัม</li>
<li>ขนาด: 153 (ยาว) x 73.5 (กว้าง) x 14.5 (หนา) mm</li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<h3>คุณลักษณะพิเศษ:</h3>
<ul>
<li>ดีไซด์สวยด้วยวัตถุที่แข็งแรงคงทน</li>
<li>รองรับกับอุปกรณ์เครื่องใช้ไฟฟ้าที่ชาร์จไฟผ่าน USB Port</li>
<li>จอ LED แสดงสถานะของพลังงานที่เหลืออยู่ และสามารถดูได้ในที่มืด</li>
<li>ผ่านการผลิตที่เป็นมาตรฐานสากล CE / FCC / RoHS</li>
</ul>
</div>
<div class="col-sm-5"><img class="img-responsive" title="Eloop E13 Power Bank (13000 mAh) Wood" src="uploads/productdetail/Eloop-E13-Wood/Eloop-E13-Wood-2.jpg" alt="Eloop E13 Power Bank (13000 mAh) Wood" /></div>
</div>
<div class="row">
<div class="col-sm-5"><img class="img-responsive" title="Eloop E13 Power Bank (13000 mAh) Wood" src="uploads/productdetail/Eloop-E13-Wood/Eloop-E13-Wood-3.jpg" alt="Eloop E13 Power Bank (13000 mAh) Wood" /></div>
<div class="col-sm-6">
<h3>ในกล่องประกอบไปด้วย:</h3>
<ul>
<li>Power bank 13000 mAh</li>
<li>สาย Micro USB cable</li>
<li>คู่มือการใช้งาน</li>
</ul>
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
                                <div>EMS Charges&nbsp;฿50.00</div>
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
                                                                <li class="facebook"><a target="_blank" href="https://www.facebook.com/sharer.php?u=https://www.dinoza.com/productdetails.php?aid=4493&t=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com" title="Share on Facebook!"><i class="fa fa-fw fa-facebook-square"></i></a></li>
                                <li class="twitter"><a target="_blank" href="https://twitter.com/home?status=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com: https://www.dinoza.com/productdetails.php?aid=4493" title="Share on Twitter!"><i class="fa fa-fw fa-twitter-square"></i></a></li>
                                <li class="google-plus"><a target="_blank" href="https://plus.google.com/share?url=https://www.dinoza.com/productdetails.php?aid=4493" title="Share on Google Plus!"><i class="fa fa-fw fa-google-plus-square"></i></a></li>
                                <li class="pinterest"><a target="_blank" href="https://pinterest.com/pin/create/button/?url=https://www.dinoza.com/productdetails.php?aid=4493&media=https://www.dinoza.com/uploads/products/facebook/facebook_0e7728446e9f3602993f534659bdb571.png&description=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com" class="pin-it-button" count-layout="horizontal" title="Share on Pinterest"><i class="fa fa-fw fa-pinterest-square"></i></a></li>
                                <li class="email-share"><a title="Share by email" href="mailto:?subject=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com&body=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com https://www.dinoza.com/productdetails.php?aid=4493&title=Eloop E13 Power Bank ความจุ 13000 mAh ลายไม้ คลาสสิค เสียบชาร์จ 2 ช่อง น้ำหนักเบา พกพาสะดวก ราคาเริ่มต้น 1 บาท! ที่ Dinoza.com"><i class="fa fa-fw fa-envelope"></i></a></li>
                            </ul>
                        <div class="clear"></div>
                    <!--ShareThis Box End Here-->
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!--ShareThis Box End Here-->
            <!--Shipping Detail Box end Here-->
                        <div id="banner-sub" class="banner_main_box" style="margin-top: 15px; margin-bottom: 15px; min-height: 0;">
                <div class="banner" style="min-height: 0;">
                    <a href='dpoints?ref=prdctdtlbnr'><img src="/uploads/banner/5-D-points-1040x218-3.jpg" style="width: 100%;" /></a>
                </div>
            </div>
                        </div>




            </div>
        </div>
      </div>
  </div>



















  <? include ('footer.php'); ?>
