
<?php include("header.php"); ?>

<?php include ('search.php'); ?>

<?php include ('navbar.php'); ?>

<br/>

<?php include ('headerdetial.php') ?>

<div class="content_container">
  <div class="category-tab-main">
     <div class="category-tab-fix">

     </div>
  </div>

 <div class="bidnow_row">
   <div class="content_middlebg">
       <div class="leftside">
         <div class="index_bidnow_header_box">
            <div class="bidnow_middlebg">

              <div class="image"><img src="images/time-1.png" align="absmiddle" /> สินค้าพวกนี้กำลังจะสิ้นสุด Bid เลย</div>
              <!--<div class="image" style="float:right;"><span class="bidnow_more"><a class="orgbtn" href="buybids">เพิ่ม Bid</a></span></div>!-->
            </div>
         </div>

         <div class="clear"></div>

         <div style="margin-top: 10px; text-align: left;border: 1px solid #e00;border-radius: 4px; width: 94%;padding: 0 3%; background: #F9F9F9;">
         <!-- <p style="font-size: 18px;margin-top:10px;">ประกาศศศศ! แจ้งยุติหน้าการประมูลครับ</p>
         <p style="font-size: 18px;">ตั้งแต่วันที่ 20 ตุลาคม 2559 เป็นต้นไป Dinoza.com จะขอระงับการประมูลทุกสินค้า</p>
         <p style="color:orange;"><span class="end_popup">คลิกอ่านรายละเอียดเพิ่มเติม</span></p> -->
        </div>

      </div><!-- Endleftside !-->

       <div class="bidnow_content" id="content_container">
         <div class="bidnow_content_top_image"></div>
         <div class="bidnow_content_middle_image" id="content_container">
           <span class='pageloadermain'></span>
           <span class='pageloaderinner'><span class='pageloader'></span></span>


              <div class="main_bidnow_box" id="" >
                <div class="main_bidnow_middle">
                   <div class="main_bidnow_area">
                       <div class="main_bidnow_product_image_box">
                          <div class="main_bidnow_product_image"><a href="#"><img src=""  border="0" alt="" /></a></div>
                       </div>
                   </div>
                </div>
              </div>


              <?php include('bidding.php') ?>


           </div>

         </div>

         <div class="clear"></div>

         <div class="block"><a href="/register?src=homebnr"><img src="images/coupon.png" /></a></div>

         <div class="clear">&nbsp;</div>

      </div>

      <div class="rightside">
        <!-- Bidpack Start -->
        <div class="bidpack_main_box">
                 <div class="bidpack_detail_middlebg">
                   <div class="bidpack_header">
                     <div class="bidpack_header_middlebg">Bid Package</div>
                   </div>
                   <div class="bidpack_detail_box">
                     <div class="bidpack_detail_leftbg">&nbsp;</div>
                     <div class="bidpack_titlerow">
                       <div class="title_bidpack">Bidpack</div>
                       <div class="title_bidpackprice">ราคา</div>
                       <div class="title_bidpacksavings">ประหยัด</div>
                     </div>

   				            <div class="bidpack_detail_row_odd">
                       <!--<div class="bidpack_detail_arrow"></div>-->
                       <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=9">100&nbsp;Bids</a></div>
                       <div class="bidpack_detail_price_odd">500฿</div>
                       <div class="bidpack_detail_price_buy"><a href="buybids?pkg=9">Buy&raquo;</a></div>
                     </div>

   				                     <div class="bidpack_detail_row_even">
                       <!--<div class="bidpack_detail_arrow"></div>-->
                       <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=10">200&nbsp;Bids</a></div>
                       <div class="bidpack_detail_price_odd">1000฿</div>
                       <div class="bidpack_detail_price_buy"><a href="buybids?pkg=10">Buy&raquo;</a></div>
                     </div>


   				                     <div class="bidpack_detail_row_odd">
                       <!--<div class="bidpack_detail_arrow"></div>-->
                       <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=11">500&nbsp;Bids</a></div>
                       <div class="bidpack_detail_price_odd">2500฿</div>
                       <div class="bidpack_detail_price_buy"><a href="buybids?pkg=11">Buy&raquo;</a></div>
                     </div>


   				                     <div class="bidpack_detail_row_even">
                       <!--<div class="bidpack_detail_arrow"></div>-->
                       <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=12">1000&nbsp;Bids</a></div>
                       <div class="bidpack_detail_price_odd">5000฿</div>
                       <div class="bidpack_detail_price_buy"><a href="buybids?pkg=12">Buy&raquo;</a></div>
                     </div>

   				                                       <div class="bidpack_detail_rightbg">&nbsp;</div>
                   </div>
                 </div>
                 <!--<div class="bidpack_detail_bottombg">&nbsp;</div>-->
               </div>

               <div class="latestwin_detail_middlebg" style="margin-top:30px; border:none;"><a href="invite">
                <img style="border: 1px solid;border-color: #e9eaed #dfe0e4 #d0d1d5;border-radius: 4px;" src="images/refer_friends-02.png" /></a>
              </div>

              <div class="auctiontype_main_box">
                <div class="auctiontype_header">
                   <div class="auctiontype_header_middlebg">Auction Types</div>
                </div>
                  <div class="auctiontype_detail_box" style="min-height: 255px;">
                    <div class="auctiontype_detail_row" >
                            <div class="auctiontype_detail_icon"><img src="images/buynow_2.png" title="สามารถซื้อสินค้าได้" /></div>
                            <div class="auctiontype_detail_title">สามารถซื้อสินค้าได้</div>
                          </div>

                          <div class="auctiontype_detail_row" >
                            <div class="auctiontype_detail_icon"><img src="images/beginner_2.png" title="Beginner Only" /></div>
                            <div class="auctiontype_detail_title">Beginner Only</div>
                          </div>

                          <div class="auctiontype_detail_row" >
                            <div class="auctiontype_detail_icon"><img src="images/icon-clickbattle-sml.png" title="Click Battle" /></div>
                            <div class="auctiontype_detail_title">Click Battle</div>
                          </div>

						             <div class="auctiontype_detail_row" >
                            <div class="auctiontype_detail_icon"><img src="images/night_2.png" title="ประมูล 24 ชั่วโมง" /></div>
                            <div class="auctiontype_detail_title">ประมูล 24 ชั่วโมง</div>
                          </div>

                      <div class="auctiontype_detail_row" >
                            <div class="auctiontype_detail_icon">&nbsp;</div>
                            <div class="auctiontype_detail_title"><span class="more_popup">ดูรายละเอียด<span></div>
                       </div>

                       <div class="bidpack_detail_rightbg">&nbsp;</div>
                  </div>
                      <div class="bidpack_detail_bottombg">&nbsp;</div>
              </div>

        </div>


        <div class="banner-bottom-main">
          <div class="featurebadge">

            <img src="images/icon-delivery-02.png" border="0" title="https://www.bidcups.com">
            <p>เราแพ็คด้วยใจ จัดส่งถึงมือ </p> ภายใน 3 วันทำการ

          </div>

          <div class="featurebadge">

            <img src="images/icon-secure-02.png" border="0">

            <p>ชำระเงินผ่านระบบที่มีความปลอดภัยมาตรฐาน SSL (มาตรฐานเดียวกับสถาบันทางการเงิน) </p>

          </div>

         <div class="featurebadge">

           <img src="images/icon-warranty-02.png" border="0">

           <p>รับประกันสินค้าทุกชิ้น มีปัญหาเปลี่ยนได้ทันทีภายใน 7 วัน</p>

        </div>

        <div class="featurebadge">

          <img src="images/icon-support-02.png" border="0">
          <p>มีทีมงานดูแลตลอด 7 วัน หากมีปัญหา ติดต่อเราทันที</p>

        </div>

        </div>
        <!-- End Service !-->
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
          </div>
        </div>
      </div>

   </div>



<?php include ('footer.php'); ?>
