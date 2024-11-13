<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/Page_Posts.css">
	<title>VMC Posts</title>
</head>
<body>
	<div class="rolayout_RoClass">
		<div class="sidemecha_RoClass lightMode">
			<div class="sidemechaCon_RoClass">
				My Content
			</div>
		</div>
		<div class="mainmecha_RoClass lightMode">
			<!--Page Header and Burger-->
			<div class="mainmechaCon_RoClass layoutOneHead_RoClass lightMode">
				<!--Burger-->
				<div class="burger_RoClass"><img class="burgerIcon_RoClass"></div>
				<!--Burger-->

				<!--Header-->
				<div class="projTitleAndUserLogin_RoClass">
					<div class="projTitleTxt_RoClass">VMC Platform</div>
					<div class="userLogin_RoClass">
						<div class="userLoginIconWrap_RoClass"><img src="../../src/MySampleDp.png"></div>
						<div class="userLoginDetails_RoClass">Account Details</div>
					</div>
				</div>
				<!--Header-->
			</div>
			<!--Page Header and Burger-->			


			<!--Page Body-->
			<div class="mainmechaCon_RoClass" id="pageContentsWrap">
				<!--Left Side or Contents Area-->
				<div class="mainmechaCon_RoClass" id="mainContentWrap">
					<!--Smart only features controller-->
					<div class="mainmechaCon_RoClass scrollWebkit lightMode" id="featuresControlsWrap" style="display: none;">
						<!--Event feature controller-->
						<div class="mainmechaCon_RoClass featuresControls">							
							<div class="mainmechaCon_RoClass featuresIcon" style="--featureIconSrc:url('../../src/event-white.png')"></div>
							<div class="mainmechaCon_RoClass featuresTextWrap">
								<div class="mainmechaCon_RoClass featuresTextTitle">Events Schedules</div>
								<div class="mainmechaCon_RoClass featuresTextDefinition">List of activities related to the Event, including the time and location of their execution.</div>
							</div>							
						</div>
						<!--Event feature controller-->	


						<!--What is new feature controller-->
						<div class="mainmechaCon_RoClass featuresControls">							
							<div class="mainmechaCon_RoClass featuresIcon" style="--featureIconSrc:url('../../src/newspaper_white.png')"></div>
							<div class="mainmechaCon_RoClass featuresTextWrap">
								<div class="mainmechaCon_RoClass featuresTextTitle lightMode">What's New</div>
								<div class="mainmechaCon_RoClass featuresTextDefinition lightMode">A new post can refer to a variety of content, including short piece of content or message published on a platform.</div>
							</div>							
						</div>	
						<!--What is new feature controller-->


						<!--Pinned Post feature controller-->
						<div class="mainmechaCon_RoClass featuresControls">							
							<div class="mainmechaCon_RoClass featuresIcon" style="--featureIconSrc:url('../../src/Pin-White.png')"></div>
							<div class="mainmechaCon_RoClass featuresTextWrap">
								<div class="mainmechaCon_RoClass featuresTextTitle lightMode">Pinned Posts</div>
								<div class="mainmechaCon_RoClass featuresTextDefinition lightMode">Highlighted important announcements, promotions, or other content.</div>
							</div>							
						</div>	
						<!--Pinned Post feature controller-->


						<!--Committees feature controller-->
						<div class="mainmechaCon_RoClass featuresControls">							
							<div class="mainmechaCon_RoClass featuresIcon" style="--featureIconSrc:url('../../src/Committees-White.png')"></div>
							<div class="mainmechaCon_RoClass featuresTextWrap">
								<div class="mainmechaCon_RoClass featuresTextTitle lightMode">Committees</div>
								<div class="mainmechaCon_RoClass featuresTextDefinition lightMode">COMING SOON!</div>
							</div>							
						</div>	
						<!--Committees feature controller-->
					</div>
					<!--Smart only features controller-->


					<!--Search Area-->
					<div class="mainmechaCon_RoClass" id="searchAreaWrap">
						<div class="mainmechaCon_RoClass" id="searchInputsWrap">
							<!--Input Text Search-->
							<input type="text" class="searchInput_RoClass lightMode" id="searchContentInput" placeholder="Search Content" style="--inputSearchIcon: url('./../../src/searchIcon.png')"/>
							<!--Input Text Search-->

							<!--Date Range Content-->
							<div class="dateRangeWrap_RoClass">
								<div class="dateRange_RoClass" onclick="displayDateRangeCalLite(this)">
									<div class="dateRangeDetails_RoClass">
										<div class="dateRangeIcon_RoClass dateRangeIconLightMode" style="--dateRangeIcon: url('./../../src/calendaricon white.png');"></div>
										<div class="dateRangeText_RoClass lightMode"><span class="dateRangeFrom_RoClass">Date Start</span> - <span class="dateRangeTo_RoClass">Date Until</span></div>
									</div>
									<div class="dateRangeTooltipArrow_RoClass lightMode"></div>					
								</div>				
								<div class="dateRangeCalLiteWrap_RoClass">
									<!--Date Range Content From-->
									<div class="calLite_RoClass dateRangeCalLite_RoClass dateRangeCalLiteFrom_RoClass" id="contentDateRangeFrom">
										<input type="hidden" name="calLite_Name" class="calLiteValue_RoClass">
										<div class="calLiteHead_RoClass">
											<div class="calLiteMonthHead_RoClass">
												<input type="hidden" name="calLiteMonthBtnValue_Name" class="calLiteMonthBtnValue_RoClass">
												<div class="calLiteButton_RoClass" onclick="changeCalLiteMonth('minus', 'contentDateRangeFrom')"><img src="../../src/callite left.png"></div>
												<div class="calLiteMonthText_RoClass"><!--Print Here--></div>
												<div class="calLiteButton_RoClass" onclick="changeCalLiteMonth('add', 'contentDateRangeFrom')"><img src="../../src/callite right.png"></div>
											</div>
											<div class="calLiteYearHead_RoClass">
												<input type="hidden" name="calLiteYearBtnValue_Name" class="calLiteYearBtnValue_RoClass">
												<div class="calLiteButton_RoClass" onclick="changeCalLiteYear('minus', 'contentDateRangeFrom')"><img src="../../src/callite left.png"></div>
												<div class="calLiteYearText_RoClass"><!--Print Here--></div>
												<div class="calLiteButton_RoClass" onclick="changeCalLiteYear('add', 'contentDateRangeFrom')"><img src="../../src/callite right.png"></div>
											</div>									
										</div>
										<div class="calLiteDaysTxt_RoClass">
											<div>Sun</div>
											<div>Mon</div>
											<div>Tue</div>
											<div>Wed</div>
											<div>Thu</div>
											<div>Fri</div>
											<div>Sat</div>
										</div>
										<div class="calLiteDaysIndex_RoClass">
											<div>
												<!--Print Here-->
											</div>
											<div>
												<!--Print Here-->								
											</div>
											<div>
												<!--Print Here-->										
											</div>
											<div>
												<!--Print Here-->										
											</div>
											<div>
												<!--Print Here-->										
											</div>
											<div>
												<!--Print Here-->										
											</div>
											<div>
												<!--Print Here-->										
											</div>
										</div>
									</div>
									<!--Date Range Content From-->

									<!--Date Range Content To-->
									<div class="calLite_RoClass dateRangeCalLite_RoClass dateRangeCalLiteTo_RoClass" id="contentDateRangeTo">
										<input type="hidden" name="calLite_Name" class="calLiteValue_RoClass">
										<div class="calLiteHead_RoClass">
											<div class="calLiteMonthHead_RoClass">
												<input type="hidden" name="calLiteMonthBtnValue_Name" class="calLiteMonthBtnValue_RoClass">
												<div class="calLiteButton_RoClass" onclick="changeCalLiteMonth('minus', 'contentDateRangeTo')"><img src="../../src/callite left.png"></div>
												<div class="calLiteMonthText_RoClass"><!--Print Here--></div>
												<div class="calLiteButton_RoClass" onclick="changeCalLiteMonth('add', 'contentDateRangeTo')"><img src="../../src/callite right.png"></div>
											</div>
											<div class="calLiteYearHead_RoClass">
												<input type="hidden" name="calLiteYearBtnValue_Name" class="calLiteYearBtnValue_RoClass">
												<div class="calLiteButton_RoClass" onclick="changeCalLiteYear('minus', 'contentDateRangeTo')"><img src="../../src/callite left.png"></div>
												<div class="calLiteYearText_RoClass"><!--Print Here--></div>
												<div class="calLiteButton_RoClass" onclick="changeCalLiteYear('add', 'contentDateRangeTo')"><img src="../../src/callite right.png"></div>
											</div>									
										</div>
										<div class="calLiteDaysTxt_RoClass">
											<div>Sun</div>
											<div>Mon</div>
											<div>Tue</div>
											<div>Wed</div>
											<div>Thu</div>
											<div>Fri</div>
											<div>Sat</div>
										</div>
										<div class="calLiteDaysIndex_RoClass">
											<div>
												<!--Print Here-->
											</div>
											<div>
												<!--Print Here-->								
											</div>
											<div>
												<!--Print Here-->										
											</div>
											<div>
												<!--Print Here-->										
											</div>
											<div>
												<!--Print Here-->										
											</div>
											<div>
												<!--Print Here-->										
											</div>
											<div>
												<!--Print Here-->										
											</div>
										</div>
									</div>
									<!--Date Range Content To-->
								</div>
							</div>
							<!--Date Range Content-->
						</div>						
					</div>
					<!--Search Area-->


					<!--Page Features-->
					<div class="mainmechaCon_RoClass scrollWebkit lightMode" id="featuresWrap">						
						<!--Events and Activities-->
						<div class="mainmechaCon_RoClass perFeature" id="eventsSection">
							<div class="mainmechaCon_RoClass sectionsLabel lightMode">Events and Activities</div>

							<div class="mainmechaCon_RoClass sectionsWrap scrollWebkit lightMode" id="eventsWrap">
								<!--Per event-->
								<div class="mainmechaCon_RoClass events lightMode">
									<img src="../../src/MySampleDp.png" class="eventsDp lightMode"/>
									<div class="mainmechaCon_RoClass eventsDetailsWrap">
										<div class="mainmechaCon_RoClass eventsTitle lightMode">ISO Accreditation</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">November 4, 2024</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Motorpool building</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">By HEPO Unit</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Posted by Juan Dela Cruz</div>
										<div class="mainmechaCon_RoClass eventsOngoing">Ongoing</div>
									</div>
								</div>
								<!--Per event-->

								<!--Per event-->
								<div class="mainmechaCon_RoClass events lightMode">
									<img src="../../src/MySampleDp.png" class="eventsDp lightMode"/>
									<div class="mainmechaCon_RoClass eventsDetailsWrap">
										<div class="mainmechaCon_RoClass eventsTitle lightMode">Coffee Vendor is back!</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">November 5, 2024</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Annex building</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">By HEPO Unit</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Posted by Juan Dela Cruz</div>
										<div class="mainmechaCon_RoClass eventsUpcoming">Upcoming</div>
									</div>
								</div>
								<!--Per event-->

								<!--Per event-->
								<div class="mainmechaCon_RoClass events lightMode">
									<img src="../../src/MySampleDp.png" class="eventsDp lightMode"/>
									<div class="mainmechaCon_RoClass eventsDetailsWrap">
										<div class="mainmechaCon_RoClass eventsTitle lightMode">Coffee Vendor is back!</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">November 5, 2024</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Annex building</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">By HEPO Unit</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Posted by Juan Dela Cruz</div>
										<div class="mainmechaCon_RoClass eventsUpcoming">Upcoming</div>
									</div>
								</div>
								<!--Per event-->

								<!--Per event-->
								<div class="mainmechaCon_RoClass events lightMode">
									<img src="../../src/MySampleDp.png" class="eventsDp lightMode"/>
									<div class="mainmechaCon_RoClass eventsDetailsWrap">
										<div class="mainmechaCon_RoClass eventsTitle lightMode">Coffee Vendor is back!</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">November 5, 2024</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Annex building</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">By HEPO Unit</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Posted by Juan Dela Cruz</div>
										<div class="mainmechaCon_RoClass eventsUpcoming">Upcoming</div>
									</div>
								</div>
								<!--Per event-->
							</div>
						</div>
						<!--Events and Activities-->


						<!--What is new posts-->
						<div class="mainmechaCon_RoClass perFeature" id="whatIsNewSection">
							<div class="mainmechaCon_RoClass sectionsLabel lightMode">What's New</div>
							
							<!--Posted Section-->
							<div class="mainmechaCon_RoClass sectionsWrap scrollWebkit lightMode" id="postsWrap">
								<!--Per Post-->
								<div class="mainmechaCon_RoClass posts lightMode">
									<!--Post Header-->
									<div class="mainmechaCon_RoClass postsHeader">
										<div class="mainmechaCon_RoClass postsHeaderDetailsWrap">
											<img class="postsDp lightMode" src="../../src/MySampleDp.png"/>
											<div class="mainmechaCon_RoClass postsHeaderDetails">
												<div class="mainmechaCon_RoClass postsEmpName lightMode">Juan Dela Cruz</div>
												<div class="mainmechaCon_RoClass postsCatNTimeWrap">
													<div class="mainmechaCon_RoClass postsCatNTimeTxt">Category Here</div>
													<div class="mainmechaCon_RoClass postsCatNTimeTxt">Just Now</div>
												</div>
											</div>											
										</div>
									</div>
									<!--Post Header-->

									<!--Post Body-->
									<div class="mainmechaCon_RoClass postsBody">
										<div class="mainmechaCon_RoClass postsBodyDetails lightMode">lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
										<div class="mainmechaCon_RoClass postsTitle lightMode">Downfall of government salary</div>
										<div class="mainmechaCon_RoClass postsSeenDetailsWrap">
											<div class="mainmechaCon_RoClass postsSeenIcon postsSeenIconLightmode"></div>
											<div class="mainmechaCon_RoClass postsSeenTxts">100</div>
										</div>
									</div>
									<!--Post Body-->
								</div>
								<!--Per Post-->

								<!--Per Post-->
								<div class="mainmechaCon_RoClass posts lightMode">
									<!--Post Header-->
									<div class="mainmechaCon_RoClass postsHeader">
										<div class="mainmechaCon_RoClass postsHeaderDetailsWrap">
											<img class="postsDp lightMode" src="../../src/MySampleDp.png"/>
											<div class="mainmechaCon_RoClass postsHeaderDetails">
												<div class="mainmechaCon_RoClass postsEmpName lightMode">Juan Dela Cruz</div>
												<div class="mainmechaCon_RoClass postsCatNTimeWrap">
													<div class="mainmechaCon_RoClass postsCatNTimeTxt">Category Here</div>
													<div class="mainmechaCon_RoClass postsCatNTimeTxt">Just Now</div>
												</div>
											</div>											
										</div>
									</div>
									<!--Post Header-->

									<!--Post Body-->
									<div class="mainmechaCon_RoClass postsBody">
										<div class="mainmechaCon_RoClass postsBodyDetails lightMode"><img src="./../../src/rally post.jpg"/></div>
										<div class="mainmechaCon_RoClass postsBodyDetails lightMode">lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum</div>
										<div class="mainmechaCon_RoClass postsTitle lightMode">Salary increase and corruption</div>
										<div class="mainmechaCon_RoClass postsSeenDetailsWrap">
											<div class="mainmechaCon_RoClass postsSeenIcon postsSeenIconLightmode"></div>
											<div class="mainmechaCon_RoClass postsSeenTxts">100</div>
										</div>
									</div>
									<!--Post Body-->
								</div>
								<!--Per Post-->

								<!--Per Post-->
								<div class="mainmechaCon_RoClass posts lightMode">
									<!--Post Header-->
									<div class="mainmechaCon_RoClass postsHeader">
										<div class="mainmechaCon_RoClass postsHeaderDetailsWrap">
											<img class="postsDp lightMode" src="../../src/MySampleDp.png"/>
											<div class="mainmechaCon_RoClass postsHeaderDetails">
												<div class="mainmechaCon_RoClass postsEmpName lightMode">Juan Dela Cruz</div>
												<div class="mainmechaCon_RoClass postsCatNTimeWrap">
													<div class="mainmechaCon_RoClass postsCatNTimeTxt">Category Here</div>
													<div class="mainmechaCon_RoClass postsCatNTimeTxt">Just Now</div>
												</div>
											</div>											
										</div>
									</div>
									<!--Post Header-->

									<!--Post Body-->
									<div class="mainmechaCon_RoClass postsBody">
										<div class="mainmechaCon_RoClass postsBodyDetails lightMode"><img src="./../../src/pikachu.jpg"/></div>
										<div class="mainmechaCon_RoClass postsBodyDetails lightMode">lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum</div>
										<div class="mainmechaCon_RoClass postsTitle lightMode">Salary increase and corruption</div>
										<div class="mainmechaCon_RoClass postsSeenDetailsWrap">
											<div class="mainmechaCon_RoClass postsSeenIcon postsSeenIconLightmode"></div>
											<div class="mainmechaCon_RoClass postsSeenTxts">100</div>
										</div>
									</div>
									<!--Post Body-->
								</div>
								<!--Per Post-->	

								<!--Per Post-->
								<div class="mainmechaCon_RoClass posts lightMode">
									<!--Post Header-->
									<div class="mainmechaCon_RoClass postsHeader">
										<div class="mainmechaCon_RoClass postsHeaderDetailsWrap">
											<img class="postsDp lightMode" src="../../src/MySampleDp.png"/>
											<div class="mainmechaCon_RoClass postsHeaderDetails">
												<div class="mainmechaCon_RoClass postsEmpName lightMode">Juan Dela Cruz</div>
												<div class="mainmechaCon_RoClass postsCatNTimeWrap">
													<div class="mainmechaCon_RoClass postsCatNTimeTxt">Category Here</div>
													<div class="mainmechaCon_RoClass postsCatNTimeTxt">Just Now</div>
												</div>
											</div>											
										</div>
									</div>
									<!--Post Header-->

									<!--Post Body-->
									<div class="mainmechaCon_RoClass postsBody">
										<div class="mainmechaCon_RoClass postsBodyDetails lightMode"><img src="./../../src/rally post.jpg"/></div>
										<div class="mainmechaCon_RoClass postsBodyDetails lightMode">lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum</div>
										<div class="mainmechaCon_RoClass postsTitle lightMode">Salary increase and corruption</div>
										<div class="mainmechaCon_RoClass postsSeenDetailsWrap">
											<div class="mainmechaCon_RoClass postsSeenIcon postsSeenIconLightmode"></div>
											<div class="mainmechaCon_RoClass postsSeenTxts">100</div>
										</div>
									</div>
									<!--Post Body-->
								</div>
								<!--Per Post-->									
							</div>
							<!--Posted Section-->
						</div>
						<!--What is new posts-->


						<!--Pinned Posts and Committees-->
						<div class="mainmechaCon_RoClass perFeature" id="pinnedPostAndCommittesSection">
							<!--Pinned Posts-->
							<div class="mainmechaCon_RoClass" id="pinnedPostSection">
								<div class="mainmechaCon_RoClass sectionsLabel lightMode">Pinned Posts</div>

								<div class="mainmechaCon_RoClass sectionsWrap scrollWebkit lightMode" id="pinnedPostsWrap">
									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost lightMode">
										<img class="pinnedPostDp lightMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost lightMode">
										<img class="pinnedPostDp lightMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost lightMode">
										<img class="pinnedPostDp lightMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost lightMode">
										<img class="pinnedPostDp lightMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost lightMode">
										<img class="pinnedPostDp lightMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost lightMode">
										<img class="pinnedPostDp lightMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost lightMode">
										<img class="pinnedPostDp lightMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost lightMode">
										<img class="pinnedPostDp lightMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost lightMode">
										<img class="pinnedPostDp lightMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->
								</div>
							</div>
							<!--Pinned Posts-->

							<!--Committees-->
							<div class="mainmechaCon_RoClass" id="committeesSection">
								<div class="mainmechaCon_RoClass sectionsLabel lightMode">Committees</div>

								<div class="mainmechaCon_RoClass sectionsWrap scrollWebkit lightMode" id="committeesWrap">
									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee lightMode">
										<img class="committeeDp lightMode" src="../../src/ISO Logo.png"/>
										<div class="mainmechaCon_RoClass committeeDetailsWrap">
											<div class="mainmechaCon_RoClass committeeTitle">Internal Quality Audit Committee</div>
											<div class="mainmechaCon_RoClass committeeDetails">
												<div class="mainmechaCon_RoClass committeeMembersDetails">Members: 35</div>
												<button class="normButton_RoClass joinCommitteeBtn">Join</button>
											</div>
										</div>
									</div>
									<!--Per Committee Post-->

									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee lightMode">
										<img class="committeeDp lightMode" src="../../src/Arta Logo.jpg"/>
										<div class="mainmechaCon_RoClass committeeDetailsWrap">
											<div class="mainmechaCon_RoClass committeeTitle">Client Satisfaction Committee</div>
											<div class="mainmechaCon_RoClass committeeDetails">
												<div class="mainmechaCon_RoClass committeeMembersDetails">Members: 15</div>
												<button class="normButton_RoClass leaveCommitteeBtn">Leave</button>
											</div>
										</div>
									</div>
									<!--Per Committee Post-->

									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee lightMode">
										<img class="committeeDp lightMode" src="../../src/ISO Logo.png"/>
										<div class="mainmechaCon_RoClass committeeDetailsWrap">
											<div class="mainmechaCon_RoClass committeeTitle">Internal Quality Audit Committee</div>
											<div class="mainmechaCon_RoClass committeeDetails">
												<div class="mainmechaCon_RoClass committeeMembersDetails">Members: 35</div>
												<button class="normButton_RoClass joinCommitteeBtn">Join</button>
											</div>
										</div>
									</div>
									<!--Per Committee Post-->

									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee lightMode">
										<img class="committeeDp lightMode" src="../../src/Arta Logo.jpg"/>
										<div class="mainmechaCon_RoClass committeeDetailsWrap">
											<div class="mainmechaCon_RoClass committeeTitle">Client Satisfaction Committee</div>
											<div class="mainmechaCon_RoClass committeeDetails">
												<div class="mainmechaCon_RoClass committeeMembersDetails">Members: 15</div>
												<button class="normButton_RoClass leaveCommitteeBtn">Leave</button>
											</div>
										</div>
									</div>
									<!--Per Committee Post-->

									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee lightMode">
										<img class="committeeDp lightMode" src="../../src/ISO Logo.png"/>
										<div class="mainmechaCon_RoClass committeeDetailsWrap">
											<div class="mainmechaCon_RoClass committeeTitle">Internal Quality Audit Committee</div>
											<div class="mainmechaCon_RoClass committeeDetails">
												<div class="mainmechaCon_RoClass committeeMembersDetails">Members: 35</div>
												<button class="normButton_RoClass joinCommitteeBtn">Join</button>
											</div>
										</div>
									</div>
									<!--Per Committee Post-->

									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee lightMode">
										<img class="committeeDp lightMode" src="../../src/Arta Logo.jpg"/>
										<div class="mainmechaCon_RoClass committeeDetailsWrap">
											<div class="mainmechaCon_RoClass committeeTitle">Client Satisfaction Committee</div>
											<div class="mainmechaCon_RoClass committeeDetails">
												<div class="mainmechaCon_RoClass committeeMembersDetails">Members: 15</div>
												<button class="normButton_RoClass leaveCommitteeBtn">Leave</button>
											</div>
										</div>
									</div>
									<!--Per Committee Post-->

									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee lightMode">
										<img class="committeeDp lightMode" src="../../src/ISO Logo.png"/>
										<div class="mainmechaCon_RoClass committeeDetailsWrap">
											<div class="mainmechaCon_RoClass committeeTitle">Internal Quality Audit Committee</div>
											<div class="mainmechaCon_RoClass committeeDetails">
												<div class="mainmechaCon_RoClass committeeMembersDetails">Members: 35</div>
												<button class="normButton_RoClass joinCommitteeBtn">Join</button>
											</div>
										</div>
									</div>
									<!--Per Committee Post-->

									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee lightMode">
										<img class="committeeDp lightMode" src="../../src/Arta Logo.jpg"/>
										<div class="mainmechaCon_RoClass committeeDetailsWrap">
											<div class="mainmechaCon_RoClass committeeTitle">Client Satisfaction Committee</div>
											<div class="mainmechaCon_RoClass committeeDetails">
												<div class="mainmechaCon_RoClass committeeMembersDetails">Members: 15</div>
												<button class="normButton_RoClass leaveCommitteeBtn">Leave</button>
											</div>
										</div>
									</div>
									<!--Per Committee Post-->

									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee lightMode">
										<img class="committeeDp lightMode" src="../../src/ISO Logo.png"/>
										<div class="mainmechaCon_RoClass committeeDetailsWrap">
											<div class="mainmechaCon_RoClass committeeTitle">Internal Quality Audit Committee</div>
											<div class="mainmechaCon_RoClass committeeDetails">
												<div class="mainmechaCon_RoClass committeeMembersDetails">Members: 35</div>
												<button class="normButton_RoClass joinCommitteeBtn">Join</button>
											</div>
										</div>
									</div>
									<!--Per Committee Post-->

									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee lightMode">
										<img class="committeeDp lightMode" src="../../src/Arta Logo.jpg"/>
										<div class="mainmechaCon_RoClass committeeDetailsWrap">
											<div class="mainmechaCon_RoClass committeeTitle">Client Satisfaction Committee</div>
											<div class="mainmechaCon_RoClass committeeDetails">
												<div class="mainmechaCon_RoClass committeeMembersDetails">Members: 15</div>
												<button class="normButton_RoClass leaveCommitteeBtn">Leave</button>
											</div>
										</div>
									</div>
									<!--Per Committee Post-->
								</div>
							</div>
							<!--Committees-->
						</div>
						<!--Pinned Posts and Committees-->						
					</div>
					<!--Page Features-->
				</div>
				<!--Left Side or Contents Area-->


				<!--Right Side or Chat Area-->
				<div class="mainmechaCon_RoClass scrollWebkit lightMode" id="chatContentWrap">
					<input type="text" class="searchInput_RoClass lightMode" id="searchChatInput" placeholder="Search Personnel" style="--inputSearchIcon: url('./../../src/searchIcon.png')"/>

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/ernesto.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Ernesto Toy</div>
							<div class="mainmechaCon_RoClass chatUserNote">Toy kingdom dasdasdasdasdas lorem ipusm charot charoto</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/cat-profile.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Abatukam Nagga</div>
							<div class="mainmechaCon_RoClass chatUserNote">Ahhhhh OMG</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/care-icon.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Marshall Teah</div>
							<div class="mainmechaCon_RoClass chatUserNote">King of the world</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/actionofficericon.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Buratsu Moko</div>
							<div class="mainmechaCon_RoClass chatUserNote">I don't know</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/ernesto.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Ernesto Toy</div>
							<div class="mainmechaCon_RoClass chatUserNote">Toy kingdom</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/cat-profile.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Abatukam Nagga</div>
							<div class="mainmechaCon_RoClass chatUserNote">Ahhhhh OMG</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/care-icon.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Marshall Teah</div>
							<div class="mainmechaCon_RoClass chatUserNote">King of the world</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/actionofficericon.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Buratsu Moko</div>
							<div class="mainmechaCon_RoClass chatUserNote">I don't know</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/ernesto.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Ernesto Toy</div>
							<div class="mainmechaCon_RoClass chatUserNote">Toy kingdom</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/cat-profile.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Abatukam Nagga</div>
							<div class="mainmechaCon_RoClass chatUserNote">Ahhhhh OMG</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/care-icon.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Marshall Teah</div>
							<div class="mainmechaCon_RoClass chatUserNote">King of the world</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/actionofficericon.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Buratsu Moko</div>
							<div class="mainmechaCon_RoClass chatUserNote">I don't know</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/ernesto.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Ernesto Toy</div>
							<div class="mainmechaCon_RoClass chatUserNote">Toy kingdom</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/cat-profile.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Abatukam Nagga</div>
							<div class="mainmechaCon_RoClass chatUserNote">Ahhhhh OMG</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/care-icon.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Marshall Teah</div>
							<div class="mainmechaCon_RoClass chatUserNote">King of the world</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/actionofficericon.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Buratsu Moko</div>
							<div class="mainmechaCon_RoClass chatUserNote">I don't know</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/ernesto.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Ernesto Toy</div>
							<div class="mainmechaCon_RoClass chatUserNote">Toy kingdom</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/cat-profile.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Abatukam Nagga</div>
							<div class="mainmechaCon_RoClass chatUserNote">Ahhhhh OMG</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/care-icon.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Marshall Teah</div>
							<div class="mainmechaCon_RoClass chatUserNote">King of the world</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/actionofficericon.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Buratsu Moko</div>
							<div class="mainmechaCon_RoClass chatUserNote">I don't know</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/ernesto.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Ernesto Toy</div>
							<div class="mainmechaCon_RoClass chatUserNote">Toy kingdom</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/cat-profile.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Abatukam Nagga</div>
							<div class="mainmechaCon_RoClass chatUserNote">Ahhhhh OMG</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/care-icon.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Marshall Teah</div>
							<div class="mainmechaCon_RoClass chatUserNote">King of the world</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/actionofficericon.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Buratsu Moko</div>
							<div class="mainmechaCon_RoClass chatUserNote">I don't know</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/ernesto.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Ernesto Toy</div>
							<div class="mainmechaCon_RoClass chatUserNote">Toy kingdom</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/cat-profile.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Abatukam Nagga</div>
							<div class="mainmechaCon_RoClass chatUserNote">Ahhhhh OMG</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/care-icon.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Marshall Teah</div>
							<div class="mainmechaCon_RoClass chatUserNote">King of the world</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/actionofficericon.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Buratsu Moko</div>
							<div class="mainmechaCon_RoClass chatUserNote">I don't know</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/ernesto.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Ernesto Toy</div>
							<div class="mainmechaCon_RoClass chatUserNote">Toy kingdom</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/cat-profile.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Abatukam Nagga</div>
							<div class="mainmechaCon_RoClass chatUserNote">Ahhhhh OMG</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Offline" src="../../src/care-icon.webp"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Marshall Teah</div>
							<div class="mainmechaCon_RoClass chatUserNote">King of the world</div>
						</div>
					</div>
					<!--Per Chat users-->

					<!--Per Chat users-->
					<div class="mainmechaCon_RoClass chatUser">
						<img class="chatUserDp_Online" src="../../src/actionofficericon.png"/>
						<div class="mainmechaCon_RoClass chatUserDetailsWrap">
							<div class="mainmechaCon_RoClass chatUserName">Buratsu Moko</div>
							<div class="mainmechaCon_RoClass chatUserNote">I don't know</div>
						</div>
					</div>
					<!--Per Chat users-->					
				</div>
				<!--Right Side or Chat Area-->
			</div>
			<!--Page Body-->				
		</div> 
	</div>

	<!--JS Script-->
	<!---Dependecies-->
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeLayOneNavScript.js"></script>
	<script type="text/javascript" src="../../Rogrid/Scripts/CalendarLite.js"></script>
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeScript.js"></script>
	<!---Dependecies-->

	<!---Executor-->
	<script type="module" src="./../Client Side/Executor_Page_Post.js"></script>
	<!---Executor-->
	<!--JS Script-->
</body>
</html>