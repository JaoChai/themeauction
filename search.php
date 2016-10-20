<div id="header-placeholder">
	      <div id="header" class="">
	          <div class="container">
	            <div class="row">
	              <div class="col-sm-12">
	                <div id="logo" class="pull-left"><a href="/"><img src="images/logo_whitetest.png" border="0" alt=""></a></div>
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
