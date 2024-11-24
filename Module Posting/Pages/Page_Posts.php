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
		<div class="sidemecha_RoClass darkMode">
			<div class="sidemechaCon_RoClass">
				My Content
			</div>
		</div>
		<div class="mainmecha_RoClass darkMode">
			<!--Page Header and Burger-->
			<div class="mainmechaCon_RoClass layoutOneHead_RoClass darkMode">
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
					<div class="mainmechaCon_RoClass scrollWebkit darkMode featuresControlsWrap_Hide" id="featuresControlsWrap">						

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
								<div class="mainmechaCon_RoClass featuresTextTitle darkMode">What's New</div>
								<div class="mainmechaCon_RoClass featuresTextDefinition darkMode">A new post can refer to a variety of content, including short piece of content or message published on a platform.</div>
							</div>							
						</div>	
						<!--What is new feature controller-->


						<!--Pinned Post feature controller-->
						<div class="mainmechaCon_RoClass featuresControls">							
							<div class="mainmechaCon_RoClass featuresIcon" style="--featureIconSrc:url('../../src/Pin-White.png')"></div>
							<div class="mainmechaCon_RoClass featuresTextWrap">
								<div class="mainmechaCon_RoClass featuresTextTitle darkMode">Pinned Posts</div>
								<div class="mainmechaCon_RoClass featuresTextDefinition darkMode">Highlighted important announcements, promotions, or other content.</div>
							</div>							
						</div>	
						<!--Pinned Post feature controller-->


						<!--Committees feature controller-->
						<div class="mainmechaCon_RoClass featuresControls">							
							<div class="mainmechaCon_RoClass featuresIcon" style="--featureIconSrc:url('../../src/Committees-White.png')"></div>
							<div class="mainmechaCon_RoClass featuresTextWrap">
								<div class="mainmechaCon_RoClass featuresTextTitle darkMode">Committees</div>
								<div class="mainmechaCon_RoClass featuresTextDefinition darkMode">COMING SOON!</div>
							</div>							
						</div>	
						<!--Committees feature controller-->


						<!--Search feature controller-->
						<div class="mainmechaCon_RoClass featuresControls">							
							<div class="mainmechaCon_RoClass featuresIcon" style="--featureIconSrc:url('../../src/searchIcon white.png')"></div>
							<div class="mainmechaCon_RoClass featuresTextWrap">
								<div class="mainmechaCon_RoClass featuresTextTitle darkMode"></div>
								<div class="mainmechaCon_RoClass featuresTextDefinition darkMode">Search Events, What is new, Pinned Post, Committees!</div>
							</div>							
						</div>	
						<!--Search feature controller-->
					</div>
					<!--Smart only features controller-->


					<!--Search Area-->
					<div class="mainmechaCon_RoClass searchAreaWrap_Hide" id="searchAreaWrap">
						<!--Input Text and Date Range-->
						<div class="mainmechaCon_RoClass" id="searchInputsWrap">							
							<!--Input Text Search-->
							<input type="text" class="searchInput_RoClass darkMode" id="searchContentInput" placeholder="Search Content" style="--inputSearchIcon: url('./../../src/searchIcon.png')"/>
							<!--Input Text Search-->

							<!--Date Range Content-->
							<div class="dateRangeWrap_RoClass">
								<div class="dateRange_RoClass" onclick="displayDateRangeCalLite(this)">
									<div class="dateRangeDetails_RoClass">
										<div class="dateRangeIcon_RoClass dateRangeIconDarkMode"></div>
										<div class="dateRangeText_RoClass darkMode"><span class="dateRangeFrom_RoClass">Date Start</span> - <span class="dateRangeTo_RoClass">Date Until</span></div>
									</div>
									<div class="dateRangeTooltipArrow_RoClass darkMode"></div>					
								</div>				
								<div class="dateRangeCalLiteWrap_RoClass">
									<!--Date Range Content From-->
									<div class="calLite_RoClass dateRangeCalLite_RoClass dateRangeCalLiteFrom_RoClass calLite_BgColor_DarkMode" id="contentDateRangeFrom">
										<input type="hidden" name="calLite_Name" class="calLiteValue_RoClass">
										<div class="calLiteHead_RoClass">
											<div class="calLiteMonthHead_RoClass">
												<input type="hidden" name="calLiteMonthBtnValue_Name" class="calLiteMonthBtnValue_RoClass">
												<div class="calLiteButton_RoClass calLiteButton_Left_DarkMode" onclick="changeCalLiteMonth('minus', 'contentDateRangeFrom')"></div>
												<div class="calLiteMonthText_RoClass calLiteHeadText_Color_DarkMode"><!--Print Here--></div>
												<div class="calLiteButton_RoClass calLiteButton_Right_DarkMode" onclick="changeCalLiteMonth('add', 'contentDateRangeFrom')"></div>
											</div>
											<div class="calLiteYearHead_RoClass">
												<input type="hidden" name="calLiteYearBtnValue_Name" class="calLiteYearBtnValue_RoClass">
												<div class="calLiteButton_RoClass calLiteButton_Left_DarkMode" onclick="changeCalLiteYear('minus', 'contentDateRangeFrom')"></div>
												<div class="calLiteYearText_RoClass calLiteHeadText_Color_DarkMode"><!--Print Here--></div>
												<div class="calLiteButton_RoClass calLiteButton_Right_DarkMode" onclick="changeCalLiteYear('add', 'contentDateRangeFrom')"></div>
											</div>						
										</div>
										<div class="calLiteDaysTxt_RoClass calLiteBodyTxts_Color_DarkMode">
											<div>Sun</div>
											<div>Mon</div>
											<div>Tue</div>
											<div>Wed</div>
											<div>Thu</div>
											<div>Fri</div>
											<div>Sat</div>
										</div>
										<div class="calLiteDaysIndex_RoClass calLiteBodyTxts_Color_DarkMode">
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
									<div class="calLite_RoClass dateRangeCalLite_RoClass dateRangeCalLiteTo_RoClass calLite_BgColor_DarkMode" id="contentDateRangeTo">
										<input type="hidden" name="calLite_Name" class="calLiteValue_RoClass">
										<div class="calLiteHead_RoClass">
											<div class="calLiteMonthHead_RoClass">
												<input type="hidden" name="calLiteMonthBtnValue_Name" class="calLiteMonthBtnValue_RoClass">
												<div class="calLiteButton_RoClass calLiteButton_Left_DarkMode" onclick="changeCalLiteMonth('minus', 'contentDateRangeTo')"></div>
												<div class="calLiteMonthText_RoClass calLiteHeadText_Color_DarkMode"><!--Print Here--></div>
												<div class="calLiteButton_RoClass calLiteButton_Right_DarkMode" onclick="changeCalLiteMonth('add', 'contentDateRangeTo')"></div>
											</div>
											<div class="calLiteYearHead_RoClass">
												<input type="hidden" name="calLiteYearBtnValue_Name" class="calLiteYearBtnValue_RoClass">
												<div class="calLiteButton_RoClass calLiteButton_Left_DarkMode" onclick="changeCalLiteYear('minus', 'contentDateRangeTo')"></div>
												<div class="calLiteYearText_RoClass calLiteHeadText_Color_DarkMode"><!--Print Here--></div>
												<div class="calLiteButton_RoClass calLiteButton_Right_DarkMode" onclick="changeCalLiteYear('add', 'contentDateRangeTo')"></div>
											</div>									
										</div>
										<div class="calLiteDaysTxt_RoClass calLiteBodyTxts_Color_DarkMode">
											<div>Sun</div>
											<div>Mon</div>
											<div>Tue</div>
											<div>Wed</div>
											<div>Thu</div>
											<div>Fri</div>
											<div>Sat</div>
										</div>
										<div class="calLiteDaysIndex_RoClass calLiteBodyTxts_Color_DarkMode">
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

							<!--Search Smart Btn-->
							<div class="mainmechaCon_RoClass" id="smartSearchBtnWrap" style="border: 2pxs solid yellow;">
								<button class="normButton_RoClass" id="smartSearchBtn">Done</button>
							</div>							
							<!--Search Smart Btn-->
						</div>
						<!--Input Text and Date Range-->

						<!--Filter Features-->
						<div class="mainmechaCon_RoClass" id="filterContentWrap">
							<div class="cusCheckBoxPaper_RoClass">
								<label for="filter_Events">Events and Activities:<div class="boxme_RoClass"><img src="./../../src/checkIcon.png"></div></label>
								<input type="checkbox" id="filter_Events" onchange="checkCusCheckBox(this)" autocomplete="off">
							</div>

							<div class="cusCheckBoxPaper_RoClass">
								<label for="filter_Posts">What is New:<div class="boxme_RoClass"><img src="./../../src/checkIcon.png"></div></label>
								<input type="checkbox" id="filter_Posts" onchange="checkCusCheckBox(this)" autocomplete="off">
							</div>

							<div class="cusCheckBoxPaper_RoClass">
								<label for="filter_PinnedPosts">Pinned Posts:<div class="boxme_RoClass"><img src="./../../src/checkIcon.png"></div></label>
								<input type="checkbox" id="filter_PinnedPosts" onchange="checkCusCheckBox(this)" autocomplete="off">
							</div>

							<div class="cusCheckBoxPaper_RoClass">
								<label for="filter_Committees">Committees:<div class="boxme_RoClass"><img src="./../../src/checkIcon.png"></div></label>
								<input type="checkbox" id="filter_Committees" onchange="checkCusCheckBox(this)" autocomplete="off">
							</div>
						</div>
						<!--Filter Features-->

						<!--Smart Search Area Button-->
						<button class="normButton_RoClass">Button Text</button>						
					</div>
					<!--Search Area-->


					<!--Page Features-->
					<div class="mainmechaCon_RoClass scrollWebkit darkMode featuresWrap_Hide" id="featuresWrap">						
						<!--Events and Activities-->
						<div class="mainmechaCon_RoClass perFeature eventsSection_Hide" id="eventsSection">
							<!--Close button for smart only-->
							<div class="mainmechaCon_RoClass smartFeatureCloseBtnWrap">
								<div class="mainmechaCon_RoClass smartFeatureCloseBtn smartFeatureCloseBtn_DarkMode"><!--Bg Only--></div>
							</div>						
							<!--Close button for smart only-->

							<div class="mainmechaCon_RoClass sectionsLabel darkMode">Events and Activities</div>

							<div class="mainmechaCon_RoClass sectionsWrap scrollWebkit darkMode" id="eventsWrap">
								<!--Per event-->
								<div class="mainmechaCon_RoClass events darkMode">
									<img src="../../src/MySampleDp.png" class="eventsDp darkMode"/>
									<div class="mainmechaCon_RoClass eventsDetailsWrap">
										<div class="mainmechaCon_RoClass eventsTitle darkMode">ISO Accreditation</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">November 4, 2024</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Motorpool building</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">By HEPO Unit</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Posted by Juan Dela Cruz</div>
										<div class="mainmechaCon_RoClass eventsOngoing">Ongoing</div>
									</div>
								</div>
								<!--Per event-->

								<!--Per event-->
								<div class="mainmechaCon_RoClass events darkMode">
									<img src="../../src/MySampleDp.png" class="eventsDp darkMode"/>
									<div class="mainmechaCon_RoClass eventsDetailsWrap">
										<div class="mainmechaCon_RoClass eventsTitle darkMode">Coffee Vendor is back!</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">November 5, 2024</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Annex building</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">By HEPO Unit</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Posted by Juan Dela Cruz</div>
										<div class="mainmechaCon_RoClass eventsUpcoming">Upcoming</div>
									</div>
								</div>
								<!--Per event-->

								<!--Per event-->
								<div class="mainmechaCon_RoClass events darkMode">
									<img src="../../src/MySampleDp.png" class="eventsDp darkMode"/>
									<div class="mainmechaCon_RoClass eventsDetailsWrap">
										<div class="mainmechaCon_RoClass eventsTitle darkMode">Coffee Vendor is back!</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">November 5, 2024</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Annex building</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">By HEPO Unit</div>
										<div class="mainmechaCon_RoClass eventsDetailsTxts">Posted by Juan Dela Cruz</div>
										<div class="mainmechaCon_RoClass eventsUpcoming">Upcoming</div>
									</div>
								</div>
								<!--Per event-->

								<!--Per event-->
								<div class="mainmechaCon_RoClass events darkMode">
									<img src="../../src/MySampleDp.png" class="eventsDp darkMode"/>
									<div class="mainmechaCon_RoClass eventsDetailsWrap">
										<div class="mainmechaCon_RoClass eventsTitle darkMode">Coffee Vendor is back!</div>
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
						<div class="mainmechaCon_RoClass perFeature whatIsNewSection_Hide" id="whatIsNewSection">
							<!--Close button for smart only-->
							<div class="mainmechaCon_RoClass smartFeatureCloseBtnWrap">
								<div class="mainmechaCon_RoClass smartFeatureCloseBtn smartFeatureCloseBtn_DarkMode"><!--Bg Only--></div>
							</div>						
							<!--Close button for smart only-->

							<div class="mainmechaCon_RoClass sectionsLabel darkMode">What's New</div>
							
							<!--Posted Section-->
							<div class="mainmechaCon_RoClass sectionsWrap scrollWebkit darkMode" id="postsWrap">
								<!--Per Post-->
								<div class="mainmechaCon_RoClass posts darkMode">
									<!--Post Header-->
									<div class="mainmechaCon_RoClass postsHeader">
										<div class="mainmechaCon_RoClass postsHeaderDetailsWrap">
											<img class="postsDp darkMode" src="../../src/MySampleDp.png"/>
											<div class="mainmechaCon_RoClass postsHeaderDetails">
												<div class="mainmechaCon_RoClass postsEmpName darkMode">Juan Dela Cruz</div>
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
										<div class="mainmechaCon_RoClass postsBodyDetails darkMode">lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
										<div class="mainmechaCon_RoClass postsTitle darkMode">Downfall of government salary</div>
										<div class="mainmechaCon_RoClass postsSeenDetailsWrap">
											<div class="mainmechaCon_RoClass postsSeenIcon postsSeenIconDarkMode"></div>
											<div class="mainmechaCon_RoClass postsSeenTxts">100</div>
										</div>
									</div>
									<!--Post Body-->
								</div>
								<!--Per Post-->

								<!--Per Post-->
								<div class="mainmechaCon_RoClass posts darkMode">
									<!--Post Header-->
									<div class="mainmechaCon_RoClass postsHeader">
										<div class="mainmechaCon_RoClass postsHeaderDetailsWrap">
											<img class="postsDp darkMode" src="../../src/MySampleDp.png"/>
											<div class="mainmechaCon_RoClass postsHeaderDetails">
												<div class="mainmechaCon_RoClass postsEmpName darkMode">Juan Dela Cruz</div>
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
										<div class="mainmechaCon_RoClass postsBodyDetails darkMode"><img src="./../../src/rally post.jpg"/></div>
										<div class="mainmechaCon_RoClass postsBodyDetails darkMode">lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum</div>
										<div class="mainmechaCon_RoClass postsTitle darkMode">Salary increase and corruption</div>
										<div class="mainmechaCon_RoClass postsSeenDetailsWrap">
											<div class="mainmechaCon_RoClass postsSeenIcon postsSeenIconDarkMode"></div>
											<div class="mainmechaCon_RoClass postsSeenTxts">100</div>
										</div>
									</div>
									<!--Post Body-->
								</div>
								<!--Per Post-->

								<!--Per Post-->
								<div class="mainmechaCon_RoClass posts darkMode">
									<!--Post Header-->
									<div class="mainmechaCon_RoClass postsHeader">
										<div class="mainmechaCon_RoClass postsHeaderDetailsWrap">
											<img class="postsDp darkMode" src="../../src/MySampleDp.png"/>
											<div class="mainmechaCon_RoClass postsHeaderDetails">
												<div class="mainmechaCon_RoClass postsEmpName darkMode">Juan Dela Cruz</div>
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
										<div class="mainmechaCon_RoClass postsBodyDetails darkMode"><img src="./../../src/pikachu.jpg"/></div>
										<div class="mainmechaCon_RoClass postsBodyDetails darkMode">lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum</div>
										<div class="mainmechaCon_RoClass postsTitle darkMode">Salary increase and corruption</div>
										<div class="mainmechaCon_RoClass postsSeenDetailsWrap">
											<div class="mainmechaCon_RoClass postsSeenIcon postsSeenIconDarkMode"></div>
											<div class="mainmechaCon_RoClass postsSeenTxts">100</div>
										</div>
									</div>
									<!--Post Body-->
								</div>
								<!--Per Post-->	

								<!--Per Post-->
								<div class="mainmechaCon_RoClass posts darkMode">
									<!--Post Header-->
									<div class="mainmechaCon_RoClass postsHeader">
										<div class="mainmechaCon_RoClass postsHeaderDetailsWrap">
											<img class="postsDp darkMode" src="../../src/MySampleDp.png"/>
											<div class="mainmechaCon_RoClass postsHeaderDetails">
												<div class="mainmechaCon_RoClass postsEmpName darkMode">Juan Dela Cruz</div>
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
										<div class="mainmechaCon_RoClass postsBodyDetails darkMode"><video src="./../../src/[BIDA] 120s DIGITAL HD.mp4" controls muted></video></div>
										<div class="mainmechaCon_RoClass postsBodyDetails darkMode">lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum</div>
										<div class="mainmechaCon_RoClass postsTitle darkMode">Salary increase and corruption</div>
										<div class="mainmechaCon_RoClass postsSeenDetailsWrap">
											<div class="mainmechaCon_RoClass postsSeenIcon postsSeenIconDarkMode"></div>
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
						<div class="mainmechaCon_RoClass perFeature pinnedPostAndCommittesSection_Hide" id="pinnedPostAndCommittesSection">
							<!--Pinned Posts-->
							<div class="mainmechaCon_RoClass pinnedPostSection_Hide" id="pinnedPostSection">
								<!--Close button for smart only-->
								<div class="mainmechaCon_RoClass smartFeatureCloseBtnWrap">
									<div class="mainmechaCon_RoClass smartFeatureCloseBtn smartFeatureCloseBtn_DarkMode"><!--Bg Only--></div>
								</div>						
								<!--Close button for smart only-->

								<div class="mainmechaCon_RoClass sectionsLabel darkMode">Pinned Posts</div>

								<div class="mainmechaCon_RoClass sectionsWrap scrollWebkit darkMode" id="pinnedPostsWrap">
									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost darkMode">
										<img class="pinnedPostDp darkMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost darkMode">
										<img class="pinnedPostDp darkMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost darkMode">
										<img class="pinnedPostDp darkMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost darkMode">
										<img class="pinnedPostDp darkMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost darkMode">
										<img class="pinnedPostDp darkMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost darkMode">
										<img class="pinnedPostDp darkMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost darkMode">
										<img class="pinnedPostDp darkMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost darkMode">
										<img class="pinnedPostDp darkMode" src="../../src/MySampleDp.png"/>
										<div class="mainmechaCon_RoClass pinnedPostDetailsWrap">
											<div class="mainmechaCon_RoClass pinnedPostTitle">Pinned Post Title</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Category 1</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Created by Juan Dela Cruz</div>
											<div class="mainmechaCon_RoClass pinnedPostTxts">Posted on: 2024/11/07</div>
										</div>
									</div>
									<!--Per Pinned Post-->

									<!--Per Pinned Post-->
									<div class="mainmechaCon_RoClass pinnedPost darkMode">
										<img class="pinnedPostDp darkMode" src="../../src/MySampleDp.png"/>
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
							<div class="mainmechaCon_RoClass committeesSection_Hide" id="committeesSection">
								<!--Close button for smart only-->
								<div class="mainmechaCon_RoClass smartFeatureCloseBtnWrap">
									<div class="mainmechaCon_RoClass smartFeatureCloseBtn smartFeatureCloseBtn_DarkMode"><!--Bg Only--></div>
								</div>						
								<!--Close button for smart only-->

								<div class="mainmechaCon_RoClass sectionsLabel darkMode">Committees</div>

								<div class="mainmechaCon_RoClass sectionsWrap scrollWebkit darkMode" id="committeesWrap">
									<!--Per Committee Post-->
									<div class="mainmechaCon_RoClass committee darkMode">
										<img class="committeeDp darkMode" src="../../src/ISO Logo.png"/>
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
									<div class="mainmechaCon_RoClass committee darkMode">
										<img class="committeeDp darkMode" src="../../src/Arta Logo.jpg"/>
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
									<div class="mainmechaCon_RoClass committee darkMode">
										<img class="committeeDp darkMode" src="../../src/ISO Logo.png"/>
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
									<div class="mainmechaCon_RoClass committee darkMode">
										<img class="committeeDp darkMode" src="../../src/Arta Logo.jpg"/>
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
									<div class="mainmechaCon_RoClass committee darkMode">
										<img class="committeeDp darkMode" src="../../src/ISO Logo.png"/>
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
									<div class="mainmechaCon_RoClass committee darkMode">
										<img class="committeeDp darkMode" src="../../src/Arta Logo.jpg"/>
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
									<div class="mainmechaCon_RoClass committee darkMode">
										<img class="committeeDp darkMode" src="../../src/ISO Logo.png"/>
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
									<div class="mainmechaCon_RoClass committee darkMode">
										<img class="committeeDp darkMode" src="../../src/Arta Logo.jpg"/>
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
									<div class="mainmechaCon_RoClass committee darkMode">
										<img class="committeeDp darkMode" src="../../src/ISO Logo.png"/>
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
									<div class="mainmechaCon_RoClass committee darkMode">
										<img class="committeeDp darkMode" src="../../src/Arta Logo.jpg"/>
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
				<div class="mainmechaCon_RoClass scrollWebkit darkMode" id="chatContentWrap" style="display: none;">
					<input type="text" class="searchInput_RoClass darkMode" id="searchChatInput" placeholder="Search Personnel" style="--inputSearchIcon: url('./../../src/searchIcon.png')"/>

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

	<!--Controllers-->

	<!--Controllers-->

	<!---Executor-->
	<script type="module" src="./../Client Side/Executor_Page_Post.js"></script>
	<!---Executor-->
	<!--JS Script-->
</body>
</html>