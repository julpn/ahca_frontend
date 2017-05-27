<!-- CLONABLE -->

<cms:template name='news_and_events' clonable="1" title="News and Events">

	<cms:editable name='body' type='nicedit' label='Body'  />
	<cms:editable name='image' type='image' label="Image" />
	<cms:editable name="feature" label="Featured on Home Page" opt_values='Feature' type='checkbox'/>

</cms:template>

		
<!-- offset=0 excludes default post. Set default post date to year 2100. Order desc means most recent come first. -->		
<cms:pages offset='0' order='desc' masterpage='page.php'>

	<cms:show k_page_title/>

	<img src="<cms:show photo/>">

	<cms:show body/>
	

</cms:pages>



<!-for sidebar, includes featured tag and limit-->
<cms:pages offset='0' order='desc' masterpage='page.php' custom_field='Feature==Feature' limit='3'>

	<cms:show k_page_title/>

	<img src="<cms:show photo/>">

	<cms:show body/>
	

</cms:pages>





-------------------------------------------

<!-- REPEATABLE -->

<cms:template title='News'>


	<cms:repeatable name='repeatable_stuff' >
	    
	    <cms:editable name='title' label="Article headline" type='textarea' col_width='10%' />
	    
	    <cms:editable name='featured' label="Featured" type='checkbox' col_width='5%' opt_values='Home' />
	        
	    <cms:editable name='excerpt' label="Article excerpt" type='textarea' col_width='35%'/>
	    
	    <cms:editable name='news_logo_normal' label="News Outlet logo" type='image' col_width='15%' input_width='120'/>
	    
	
	</cms:repeatable>


</cms:template>



<cms:show_repeatable 'press_items' >
	
				
	<cms:show date/>
						
	<img src="<cms:show news_logo_dark/>"/>
	
	<a href="<cms:show url/>" class="news_headline" target="new"><cms:show title/></a>
						
				
</cms:show_repeatable>


------------------------------------------

<!-- FULL BLOG FUNCTIONALITY -->

<cms:template name='news_and_events' clonable="1" title="News and Events">

	<cms:editable name='body' type='nicedit' />
	
	<cms:editable name='photo' type='image' />

</cms:template>
<!--cms stuff end-->


	<div class="">
	
		<!-- single page -->
		<cms:if k_is_page >	
				
			<div class="news_item">
				
				<h2><cms:show k_page_title/></h2>
				
				<img src="<cms:show photo/>">
				
				<div><cms:show body/></div>
			
			</div>

		<!-- list view -->
		<cms:else />
		
			<cms:pages offset='0' order='desc' paginate='1' limit='10'>
			
				<div class="news_item">
					
					<h2><cms:show k_page_title/></h2>
					
					<img src="<cms:show photo/>">
					
					<div><cms:excerptHTML count='150' trail="<a href=\"<cms:show k_page_link />\"><div class='more_button'>MORE</div></a>"><cms:show body/></cms:excerptHTML></div>
				
					
				
				</div>
			
			<div class="paginate">
					
				<cms:if k_paginated_bottom>
				
					
					<cms:if k_paginate_link_next>	
						<div>
							<a href="<cms:show k_paginate_link_next />">Next</a>
						</div>
					</cms:if>
					
					<cms:if k_paginate_link_prev>
						<div>
							<a href="<cms:show k_paginate_link_prev />">Previous</a>
						</div>
					</cms:if>
					
					
				</cms:if>
					
			</div>
					
			</cms:pages>
		
		</cms:if>
		
				
	</div>



------------------------------------------


<!-- VIDEOS -->


<!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>




<cms:template title='Videos' clonable="1">

	<cms:editable name='title' type='text' label="Title"/>
	<cms:editable name='description' type='richtext' label="Description"/>
	<cms:editable name='youtube_url' type='text' label='Youtube embed URL (Include http:// or https://)'/>
	<cms:editable name='facebook_url' type='text'  label='Facebook embed URL (Include http:// or https://)'/>
	<cms:editable name="feature" label="Featured on Home Page" opt_values='Feature' type='checkbox'/>

</cms:template>


<cms:pages masterpage='videos.php' order='desc' limit='1' offset='0'>

						
			<cms:if youtube_url>
			
				<div class='embed-container'><iframe src='<cms:show youtube_url/>?showinfo=0' frameborder='0' allowfullscreen></iframe></div>					
			
			</cms:if>
			
			<cms:if facebook__url>
			
				<div class="fb-video" data-href="<cms:show facebook_url/>" data-show-text="false"></div>
			
			</cms:if>				
			
			
				
</cms:pages>

