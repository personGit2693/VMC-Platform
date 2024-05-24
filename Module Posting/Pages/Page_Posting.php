<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/Posting Page.css">
	<title>Posting Page</title>
</head>
<body>	
	<!--Top Section-->
	<div class="top-section">
		<div class="top-left-menu">
			<a class="home-logo" href=""><img src="../../src/homeiconwhite.png"></a>

			<!--Search Textbox-->
			<input type="text" class="searchInput_RoClass" id="searchInput_RoId" placeholder="Search..." style="--inputSearchIcon: url('../../src/searchIcon.png')">
			<!--Search Textbox-->
		</div>

		<div class="top-right-menu">
			<button class="toggle-mode-class" id="toggle-mode-id" onclick="controller_Btn_ChangeMode()">Light Mode</button>
			<div class="topMenus burger-icon" onclick="controller_Div_DisplayRightSideContent()"><img src="../../src/burgericon.png"></div>
			<a class="topMenus gear-icon" href=""><img src=../../src/gear_white.png></a>

			<div class="user-profile">
				<img src="../../src/cat-profile.png">
			</div>
		</div>
	</div>
	<!--Top Section-->

	<!--Mid Section-->
	<div class="rolayout_RoClass" id="rolayout_RoId">
		<!--Left Side Content-->
		<div class="sidemecha_RoClass" id="sidemecha_RoId" style="--naviBgColor:transparent;">
			<div class="sidemechaCon_RoClass">
				<div class="company-logo"><img src="../../src/vmclogo.png"></div>

				<!--With Sub Menus-->
				<div class="mainNavMenu_RoClass" onclick="collapseMenu(this)">			
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/sccc icon green.png'); --activeMainNavMenuIcon:url('../../src/sccc icon green.png')"></div>
					<span class="generalNavMenuText_RoClass">APPS</span><div class="chevronIconWrap_RoClass"><img src="../../src/Chevron Right_hover.png"/></div>
				</div>

				<div style="max-height: 0px;" class="subNavMenuWrap_RoClass">
					<a href="http://localhost/VMC Platform/Module Registration/Pages/Page_Access.php" target="_blank" class="subNavMenu_RoClass">				
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>
				</div>
			</div>
		</div>
		<!--Left Side Content-->

		<!--Mid Content-->
		<div class="mainmecha_RoClass" id="mainmecha_RoId" style="--mainBodyBgColor:transparent;">
			<div class="mainmechaCon_RoClass layoutOneHead_RoClass" id="mainmechaCon_RoId" style="--projectTitle_BgColor:transparent;">
				<div class="burger_RoClass" id="burger_RoId"><img class="burgerIcon_RoClass"></div>

				<div class="projectTitle_RoClass" id="projectTitle_RoId">CREATE A POST</div>

				<div class="post-form">
					<form class="create-post-form">
						<label class="post-category-label" for="post-category-id">Category:</label>
						
						<select class="post-category-class" id="post-category-id" required>
							<option value="">Select Category</option>
							<option value="category1">Category 1</option>
							<option value="category2">Category 2</option>
							<option value="category2">Category 3</option>
							<option value="category2">Category 4</option>
							<option value="category2">Category 5</option>
						</select>

						<label class="post-title-class" for="post-title-id">Title:</label>
						<input type="text" id="post-title-id" required>

						<label class="post-content-class" for="post-content-id">Content:</label>

						<div class="textarea-container">
							<textarea id="post-content-id" rows="1" required oninput="controller_Textarea_ResizeTextArea(this)"></textarea>
						</div>
						
						<label for="file-upload-id" class="custom-file-upload">Add a Photo or Video (optional)</label>
						<input id="file-upload-id" type="file" style="display: none;" onchange="controller_InputFile_UploadFile(this)">

						<div class="file-preview-container-class" id="file-preview-container-id"></div>

						<button class="create-post-button" type="submit">Submit Post</button>
					</form>
				</div>

				<!--Posts Section-->
				<div class="posts">
					<div class="recent-posts">RECENT POSTS</div>

					<div class="post-list">
						<div class="user-profile-box user-profile">
							<img src="../../src/cat-profile.png">
							<div class="user-name">John Smith</div>
							<div class="chosen-category">Category 1</div>
						</div>
						
						<div class="post-title-class">Grab Car Saver</div>

						<div class="post-content-class">
							<p>
								Yan ang lowbog! 🤿 Pwede ka gumala every day this summer sa baba ng rates ng GrabCar Saver, available in Manila, Pampanga, Bacolod, and Iloilo. 🚗 May extra 10% OFF on 60 rides when you subscribe to RideSaver for only P99. BOOK now! 💚
							</p>
							Learn more: <a href="">grb.to/RideSaver</a> 
							<p>
								“Tibay” refers to 2x more Calcium, B-Vitamins (B1, B6, B12) & Vitamin C vs selected regular powdered milk brands.
							</p>

							<p>ASC Ref No. G0113N010524G</p>
						</div>

						<div class="file-preview-container-class">
							<img class="file-preview-element" src="../../src/grab.jpg">
						</div>
						
						<div class="post-reactions">
							<div class="reactions-container">
								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/like-icon.webp">
									<div class="reaction-count">101</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/heart-icon.webp">
									<div class="reaction-count">38</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/care-icon.webp">
									<div class="reaction-count">11</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/haha-icon.png">
									<div class="reaction-count">16</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/wow-icon.svg">
									<div class="reaction-count">40</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/sad-icon.webp">
									<div class="reaction-count">11</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/angry-icon.png">
									<div class="reaction-count">4</div>
								</div>
							</div>

							<div class="comment-count" onclick="controller_Div_ToggleComments()">4 comments</div>
						</div>

						<div class="post-actions actions">
							<div class="reaction-popup-container">
								<button class="like-button">Like</button>

								<div class="reactions-popup">
									<div class="emoji-container">
										<img class="like-icon" src="../../src/like-icon.webp">
									</div>

									<div class="emoji-container">
										<img class="heart-icon" src="../../src/heart-icon.webp">
									</div>

									<div class="emoji-container">
										<img class="care-icon" src="../../src/care-icon.webp">
									</div>

									<div class="emoji-container">
										<img class="haha-icon" src="../../src/haha-icon.png">
									</div>

									<div class="emoji-container">
										<img class="wow-icon" src="../../src/wow-icon.svg">
									</div>

									<div class="emoji-container">
										<img class="sad-icon" src="../../src/sad-icon.webp">
									</div>

									<div class="emoji-container">
										<img class="angry-icon" src="../../src/angry-icon.png">
									</div>
								</div>
							</div>

							<button>Comment</button>
							<button>Edit</button>
							<button>Delete</button>
						</div>

						<div class="date-posted">Date Posted: 4/19/2024, 7:51:06 PM</div>

						<!--Comment Section-->
						<div class="comment-section-class" id="comment-section-id" style="display: none;">
							<div class="comment">
								<div class="profile-container">
									<div class="user-profile">
										<img src="../../src/cat-profile.png">
									</div>

									<div class="post-comment">
										<div class="comment-name">Robert Johnson</div>

										<div>
											I left my phone in Roy Sison Medina's car. I am Robert Johnson, it was from Lincoln Tower Proscenium to el Chupacabra Makati. I have phone ocater of his location, please advise!
										</div>
									</div>
								</div>

								<div class="comment-reactions">
									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/like-icon.webp">
										<div class="reaction-count">101</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/heart-icon.webp">
										<div class="reaction-count">38</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/care-icon.webp">
										<div class="reaction-count">11</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/haha-icon.png">
										<div class="reaction-count">16</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/wow-icon.svg">
										<div class="reaction-count">40</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/sad-icon.webp">
										<div class="reaction-count">11</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/angry-icon.png">
										<div class="reaction-count">4</div>
									</div>
								</div>

								<div class="comment-actions actions">
									<div class="reaction-popup-container">
										<button class="like-button">Like</button>

										<div class="reactions-popup">
											<div class="emoji-container">
												<img class="like-icon" src="../../src/like-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="heart-icon" src="../../src/heart-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="care-icon" src="../../src/care-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="haha-icon" src="../../src/haha-icon.png">
											</div>

											<div class="emoji-container">
												<img class="wow-icon" src="../../src/wow-icon.svg">
											</div>

											<div class="emoji-container">
												<img class="sad-icon" src="../../src/sad-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="angry-icon" src="../../src/angry-icon.png">
											</div>
										</div>
									</div>

									<button>Edit</button>
									<button>Delete</button>
								</div>

								<div class="date-posted">Date Posted: 4/19/2024, 8:39:45 PM</div>
							</div>

							<div class="comment">
								<div class="profile-container">
									<div class="user-profile">
										<img src="../../src/cat-profile.png">
									</div>

									<div class="post-comment">
										<div class="comment-name">Robert Johnson</div>

										<div>
											I left my phone in Roy Sison Medina's car. I am Robert Johnson, it was from Lincoln Tower Proscenium to el Chupacabra Makati. I have phone ocater of his location, please advise!
										</div>
									</div>
								</div>

								<div class="comment-reactions">
									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/like-icon.webp">
										<div class="reaction-count">101</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/heart-icon.webp">
										<div class="reaction-count">38</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/care-icon.webp">
										<div class="reaction-count">11</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/haha-icon.png">
										<div class="reaction-count">16</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/wow-icon.svg">
										<div class="reaction-count">40</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/sad-icon.webp">
										<div class="reaction-count">11</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/angry-icon.png">
										<div class="reaction-count">4</div>
									</div>
								</div>

								<div class="comment-actions actions">
									<div class="reaction-popup-container">
										<button class="like-button">Like</button>

										<div class="reactions-popup">
											<div class="emoji-container">
												<img class="like-icon" src="../../src/like-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="heart-icon" src="../../src/heart-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="care-icon" src="../../src/care-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="haha-icon" src="../../src/haha-icon.png">
											</div>

											<div class="emoji-container">
												<img class="wow-icon" src="../../src/wow-icon.svg">
											</div>

											<div class="emoji-container">
												<img class="sad-icon" src="../../src/sad-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="angry-icon" src="../../src/angry-icon.png">
											</div>
										</div>
									</div>

									<button>Edit</button>
									<button>Delete</button>
								</div>

								<div class="date-posted">Date Posted: 4/19/2024, 8:39:45 PM</div>
							</div>

							<div class="comment">
								<div class="profile-container">
									<div class="user-profile">
										<img src="../../src/cat-profile.png">
									</div>

									<div class="post-comment">
										<div class="comment-name">Edward Arroyo</div>
										<div>Paybills not working. Can't see Billers</div>
									</div>
								</div>

								<div class="comment-reactions">
									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/like-icon.webp">
										<div class="reaction-count">101</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/heart-icon.webp">
										<div class="reaction-count">38</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/care-icon.webp">
										<div class="reaction-count">11</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/haha-icon.png">
										<div class="reaction-count">16</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/wow-icon.svg">
										<div class="reaction-count">40</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/sad-icon.webp">
										<div class="reaction-count">11</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/angry-icon.png">
										<div class="reaction-count">4</div>
									</div>
								</div>

								<div class="comment-actions actions">
									<div class="reaction-popup-container">
										<button class="like-button">Like</button>

										<div class="reactions-popup">
											<div class="emoji-container">
												<img class="like-icon" src="../../src/like-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="heart-icon" src="../../src/heart-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="care-icon" src="../../src/care-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="haha-icon" src="../../src/haha-icon.png">
											</div>

											<div class="emoji-container">
												<img class="wow-icon" src="../../src/wow-icon.svg">
											</div>

											<div class="emoji-container">
												<img class="sad-icon" src="../../src/sad-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="angry-icon" src="../../src/angry-icon.png">
											</div>
										</div>
									</div>
									
									<button>Edit</button>
									<button>Delete</button>
								</div>

								<div class="date-posted">Date Posted: 4/19/2024, 8:39:45 PM</div>
							</div>

							<div class="comment">
								<div class="profile-container">
									<div class="user-profile">
										<img src="../../src/cat-profile.png">
									</div>

									<div class="post-comment">
										<div class="comment-name">Joshua Tibay</div>

										<div>
											hello! i was charged double. my recent transport transaction was already paid after the ride, it has been reflected on my mastercard. however, today, i learned that grab froze my cashless payments due to non-payment of that said transaction. how can i be helped with this?
										</div>
									</div>
								</div>

								<div class="comment-reactions">
									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/like-icon.webp">
										<div class="reaction-count">101</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/heart-icon.webp">
										<div class="reaction-count">38</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/care-icon.webp">
										<div class="reaction-count">11</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/haha-icon.png">
										<div class="reaction-count">16</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/wow-icon.svg">
										<div class="reaction-count">40</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/sad-icon.webp">
										<div class="reaction-count">11</div>
									</div>

									<div class="reaction-icon-container">
										<img class="reaction-icon" src="../../src/angry-icon.png">
										<div class="reaction-count">4</div>
									</div>
								</div>

								<div class="comment-actions actions">
									<div class="reaction-popup-container">
										<button class="like-button">Like</button>

										<div class="reactions-popup">
											<div class="emoji-container">
												<img class="like-icon" src="../../src/like-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="heart-icon" src="../../src/heart-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="care-icon" src="../../src/care-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="haha-icon" src="../../src/haha-icon.png">
											</div>

											<div class="emoji-container">
												<img class="wow-icon" src="../../src/wow-icon.svg">
											</div>

											<div class="emoji-container">
												<img class="sad-icon" src="../../src/sad-icon.webp">
											</div>

											<div class="emoji-container">
												<img class="angry-icon" src="../../src/angry-icon.png">
											</div>
										</div>
									</div>

									<button>Edit</button>
									<button>Delete</button>
								</div>

								<div class="date-posted">Date Posted: 4/19/2024, 8:39:45 PM</div>
							</div>
						</div>
						<!--Comment Section-->

						<div class="profile-container">
							<div class="user-profile">
								<img src="../../src/cat-profile.png">
							</div>

							<div class="textarea-comment-container">
								<textarea class="comment-input" rows="1" oninput="controller_Textarea_ResizeTextArea(this)" placeholder="Write a comment..."></textarea>
							</div>
						</div>
					</div>
				</div>
				<!--Posts Section-->
			</div>
		</div>
		<!--Mid Content-->

		<!--Right Side Content-->
		<div class="right-side-container">
			<!--Side Content 1-->
			<div class="side-content-wrapper">
				<div class="side-content-title">Global Messages</div>

				<div class="side-content-content">
					<div class="content-title">Boss Amo messaged Juan Dela Cruz</div>
					<div class="date">Date Sent: 4/19/2024, 8:39:45 PM</div>
				</div>

				<div class="side-content-content">
					<div class="content-title">Boss Amo messaged Hubert Blaine Wolfeschl Sr.</div>
					<div class="date">Date Sent: 4/19/2024, 8:39:45 PM</div>
				</div>

				<div class="side-content-content">
					<div class="content-title">Boss Amo messaged Juan Dela Cruz</div>
					<div class="date">Date Sent: 4/19/2024, 8:39:45 PM</div>
				</div>

				<div class="side-content-content">
					<div class="content-title">Boss Amo messaged Juan Dela Cruz</div>
					<div class="date">Date Sent: 4/19/2024, 8:39:45 PM</div>
				</div>

				<div class="side-content-content">
					<div class="content-title">Boss Amo messaged Juan Dela Cruz</div>
					<div class="date">Date Sent: 4/19/2024, 8:39:45 PM</div>
				</div>

				<div class="side-content-content">
					<div class="content-title">Boss Amo messaged Juan Dela Cruz</div>
					<div class="date">Date Sent: 4/19/2024, 8:39:45 PM</div>
				</div>
			</div>
			<!--Side Content 1-->

			<!--Side Content 2-->
			<div class="side-content-wrapper pinned-posts-wrapper">
				<div class="side-content-title">Pinned Posts</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
				</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
				</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
				</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
				</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
				</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
				</div>
			</div>
			<!--Side Content 2-->

			<!--Side Content 3-->
			<div class="side-content-wrapper my-posts-wrapper">
				<div class="side-content-title">My Posts</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
					<button class="delete-post">Delete</button>
				</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
					<button class="delete-post">Delete</button>
				</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
					<button class="delete-post">Delete</button>
				</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
					<button class="delete-post">Delete</button>
				</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
					<button class="delete-post">Delete</button>
				</div>

				<div class="side-content-content">
					<div class="content-title"><a href="#" onclick="showMyMod('modalme_RoClass', 0)">Grab Car Saver</a></div>
					<div class="date">Date Posted: 4/19/2024, 8:39:45 PM</div>
					<button class="delete-post">Delete</button>
				</div>
			</div>
			<!--Side Content 3-->
		</div>
		<!--Right Side Content-->
	</div>
	<!--Mid Section-->

	<!--Bottom Section / Footer-->
	<hr class="linethis_RoClass">
	<div class="footerWrap_RoClass" id="footerWrap_RoId">
		<!--<span class="footerTxt_RoClass" id="footerTxt_RoId">&copy; 2024 Human Resource Information System. All rights reserved.</span>-->
	</div>
	<!--Bottom Section / Footer-->

	<!--Chat Section-->
	<div class="chat-toggle-button" onclick="controller_Div_ToggleContacts();"><img src="../../src/chat-icon.png"></div>

	<div class="chat-container" style="display: none;">
		<div class="contacts">
			<div class="contact-text">Contacts</div>

			<input type="text" class="searchInput_RoClass" id="search-contact-id" style="--inputSearchIcon: url('../../src/searchIcon.png')">
		</div>

		<div class="contact-container" onclick="controller_Div_DisplayChatbox('Angelo Arellano')">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="online-indicator-small"></div>
			</div>
			
			<div class="profile-name">Angelo Arellano</div>
		</div>

		<div class="contact-container" onclick="controller_Div_DisplayChatbox('Jane Luna')">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="online-indicator-small"></div>
			</div>

			<div class="profile-name">Jane Luna</div>
		</div>

		<div class="contact-container" onclick="controller_Div_DisplayChatbox('Richard Bautista')">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">Richard Baustista</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>
	</div>

	<div class="chat-box-container" style="visibility: hidden;"></div>
	<!--Chat Section-->

	<!--Modals-->
	<!--_Modal Post-->
	<div class="modalmeCon_RoClass" style="--topOnBlurrer: 1;">
		<div class="modalme_RoClass">
			<div class="modalHeadClose_RoClass" onclick="closeMyMod('modalme_RoClass', 0)">
				<img class="close-mod-icon" src="../../src/closeModIcon.png">
			</div>

			<a class="home-logo" href=""><img src="../../src/homeiconwhite.png"></a>

			<div class="modalBody_RoClass">
				<div class="posted-file-container">
					<img class="posted-file" src="../../src/grab.jpg">
				</div>

				<div class="posted-info-container">
					<div class="modal-menu-container">
						<a class="topMenus gear-icon" href=""><img src=../../src/gear_white.png></a>

						<div class="user-profile">
							<img src="../../src/cat-profile.png">
						</div>
					</div>

					<div class="user-profile user-profile-modal">
						<img src="../../src/cat-profile.png">
						<div class="user-name-modal">John Smith</div>
						<div class="chosen-category-modal">Category 1</div>
					</div>

					<div class="posted-title">Grab Car Saver</div>

					<div class="posted-content">
						<p>
							Yan ang lowbog! 🤿 Pwede ka gumala every day this summer sa baba ng rates ng GrabCar Saver, available in Manila, Pampanga, Bacolod, and Iloilo. 🚗 May extra 10% OFF on 60 rides when you subscribe to RideSaver for only P99. BOOK now! 💚
						</p>
						Learn more: <a href="">grb.to/RideSaver</a> 
						<p>
							“Tibay” refers to 2x more Calcium, B-Vitamins (B1, B6, B12) & Vitamin C vs selected regular powdered milk brands.
						</p>

						<p>ASC Ref No. G0113N010524G</p>
					</div>

					<div class="posted-reactions">
						<div class="reactions-container">
							<div class="reaction-icon-container">
								<img class="reaction-icon" src="../../src/like-icon.webp">
								<div class="reaction-count">101</div>
							</div>

							<div class="reaction-icon-container">
								<img class="reaction-icon" src="../../src/heart-icon.webp">
								<div class="reaction-count">38</div>
							</div>

							<div class="reaction-icon-container">
								<img class="reaction-icon" src="../../src/care-icon.webp">
								<div class="reaction-count">11</div>
							</div>

							<div class="reaction-icon-container">
								<img class="reaction-icon" src="../../src/haha-icon.png">
								<div class="reaction-count">16</div>
							</div>

							<div class="reaction-icon-container">
								<img class="reaction-icon" src="../../src/wow-icon.svg">
								<div class="reaction-count">40</div>
							</div>

							<div class="reaction-icon-container">
								<img class="reaction-icon" src="../../src/sad-icon.webp">
								<div class="reaction-count">26</div>
							</div>

							<div class="reaction-icon-container">
								<img class="reaction-icon" src="../../src/angry-icon.png">
								<div class="reaction-count">11</div>
							</div>
						</div>

						<div class="comment-count" onclick="controller_Div_ToggleModalComments()">4 comments</div>
					</div>

					<div class="posted-actions actions">
						<div class="reaction-popup-container">
							<button class="like-button">Like</button>

							<div class="reactions-popup">
								<div class="emoji-container">
									<img class="like-icon" src="../../src/like-icon.webp">
								</div>

								<div class="emoji-container">
									<img class="heart-icon" src="../../src/heart-icon.webp">
								</div>

								<div class="emoji-container">
									<img class="care-icon" src="../../src/care-icon.webp">
								</div>

								<div class="emoji-container">
									<img class="haha-icon" src="../../src/haha-icon.png">
								</div>

								<div class="emoji-container">
									<img class="wow-icon" src="../../src/wow-icon.svg">
								</div>

								<div class="emoji-container">
									<img class="sad-icon" src="../../src/sad-icon.webp">
								</div>

								<div class="emoji-container">
									<img class="angry-icon" src="../../src/angry-icon.png">
								</div>
							</div>
						</div>

						<button>Comment</button>
						<button>Edit</button>
						<button>Delete</button>
					</div>

					<div class="date-posted">Date Posted: 4/19/2024, 7:51:06 PM</div>

					<!--Comment Section-->
					<div class="modal-comment-section-class" id="modal-comment-section-id" style="display: none;">
						<div class="comment">
							<div class="profile-container">
								<div class="user-profile">
									<img src="../../src/cat-profile.png">
								</div>

								<div class="post-comment">
									<div class="comment-name">Robert Johnson</div>

									<div>
										I left my phone in Roy Sison Medina's car. I am Robert Johnson, it was from Lincoln Tower Proscenium to el Chupacabra Makati. I have phone ocater of his location, please advise!
									</div>
								</div>
							</div>

							<div class="comment-reactions">
								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/like-icon.webp">
									<div class="reaction-count">101</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/heart-icon.webp">
									<div class="reaction-count">38</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/care-icon.webp">
									<div class="reaction-count">11</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/haha-icon.png">
									<div class="reaction-count">16</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/wow-icon.svg">
									<div class="reaction-count">40</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/sad-icon.webp">
									<div class="reaction-count">26</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/angry-icon.png">
									<div class="reaction-count">11</div>
								</div>
							</div>

							<div class="comment-actions actions">
								<div class="reaction-popup-container">
									<button class="like-button">Like</button>

									<div class="reactions-popup">
										<div class="emoji-container">
											<img class="like-icon" src="../../src/like-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="heart-icon" src="../../src/heart-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="care-icon" src="../../src/care-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="haha-icon" src="../../src/haha-icon.png">
										</div>

										<div class="emoji-container">
											<img class="wow-icon" src="../../src/wow-icon.svg">
										</div>

										<div class="emoji-container">
											<img class="sad-icon" src="../../src/sad-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="angry-icon" src="../../src/angry-icon.png">
										</div>
									</div>
								</div>

								<button>Edit</button>
								<button>Delete</button>
							</div>

							<div class="date-posted">Date Posted: 4/19/2024, 8:39:45 PM</div>
						</div>

						<div class="comment">
							<div class="profile-container">
								<div class="user-profile">
									<img src="../../src/cat-profile.png">
								</div>

								<div class="post-comment">
									<div class="comment-name">Robert Johnson</div>

									<div>
										I left my phone in Roy Sison Medina's car. I am Robert Johnson, it was from Lincoln Tower Proscenium to el Chupacabra Makati. I have phone ocater of his location, please advise!
									</div>
								</div>
							</div>

							<div class="comment-reactions">
								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/like-icon.webp">
									<div class="reaction-count">101</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/heart-icon.webp">
									<div class="reaction-count">38</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/care-icon.webp">
									<div class="reaction-count">11</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/haha-icon.png">
									<div class="reaction-count">16</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/wow-icon.svg">
									<div class="reaction-count">40</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/sad-icon.webp">
									<div class="reaction-count">26</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/angry-icon.png">
									<div class="reaction-count">11</div>
								</div>
							</div>

							<div class="comment-actions actions">
								<div class="reaction-popup-container">
									<button class="like-button">Like</button>

									<div class="reactions-popup">
										<div class="emoji-container">
											<img class="like-icon" src="../../src/like-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="heart-icon" src="../../src/heart-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="care-icon" src="../../src/care-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="haha-icon" src="../../src/haha-icon.png">
										</div>

										<div class="emoji-container">
											<img class="wow-icon" src="../../src/wow-icon.svg">
										</div>

										<div class="emoji-container">
											<img class="sad-icon" src="../../src/sad-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="angry-icon" src="../../src/angry-icon.png">
										</div>
									</div>
								</div>

								<button>Edit</button>
								<button>Delete</button>
							</div>

							<div class="date-posted">Date Posted: 4/19/2024, 8:39:45 PM</div>
						</div>

						<div class="comment">
							<div class="profile-container">
								<div class="user-profile">
									<img src="../../src/cat-profile.png">
								</div>

								<div class="post-comment">
									<div class="comment-name">Edward Arroyo</div>
									<div>Paybills not working. Can't see Billers</div>
								</div>
							</div>

							<div class="comment-reactions">
								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/like-icon.webp">
									<div class="reaction-count">101</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/heart-icon.webp">
									<div class="reaction-count">38</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/care-icon.webp">
									<div class="reaction-count">11</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/haha-icon.png">
									<div class="reaction-count">16</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/wow-icon.svg">
									<div class="reaction-count">40</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/sad-icon.webp">
									<div class="reaction-count">26</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/angry-icon.png">
									<div class="reaction-count">11</div>
								</div>
							</div>

							<div class="comment-actions actions">
								<div class="reaction-popup-container">
									<button class="like-button">Like</button>

									<div class="reactions-popup">
										<div class="emoji-container">
											<img class="like-icon" src="../../src/like-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="heart-icon" src="../../src/heart-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="care-icon" src="../../src/care-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="haha-icon" src="../../src/haha-icon.png">
										</div>

										<div class="emoji-container">
											<img class="wow-icon" src="../../src/wow-icon.svg">
										</div>

										<div class="emoji-container">
											<img class="sad-icon" src="../../src/sad-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="angry-icon" src="../../src/angry-icon.png">
										</div>
									</div>
								</div>

								<button>Edit</button>
								<button>Delete</button>
							</div>

							<div class="date-posted">Date Posted: 4/19/2024, 8:39:45 PM</div>
						</div>

						<div class="comment">
							<div class="profile-container">
								<div class="user-profile">
									<img src="../../src/cat-profile.png">
								</div>

								<div class="post-comment">
									<div class="comment-name">Joshua Tibay</div>

									<div>
										hello! i was charged double. my recent transport transaction was already paid after the ride, it has been reflected on my mastercard. however, today, i learned that grab froze my cashless payments due to non-payment of that said transaction. how can i be helped with this?
									</div>
								</div>
							</div>

							<div class="comment-reactions">
								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/like-icon.webp">
									<div class="reaction-count">101</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/heart-icon.webp">
									<div class="reaction-count">38</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/care-icon.webp">
									<div class="reaction-count">11</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/haha-icon.png">
									<div class="reaction-count">16</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/wow-icon.svg">
									<div class="reaction-count">40</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/sad-icon.webp">
									<div class="reaction-count">26</div>
								</div>

								<div class="reaction-icon-container">
									<img class="reaction-icon" src="../../src/angry-icon.png">
									<div class="reaction-count">11</div>
								</div>
							</div>

							<div class="comment-actions actions">
								<div class="reaction-popup-container">
									<button class="like-button">Like</button>

									<div class="reactions-popup">
										<div class="emoji-container">
											<img class="like-icon" src="../../src/like-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="heart-icon" src="../../src/heart-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="care-icon" src="../../src/care-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="haha-icon" src="../../src/haha-icon.png">
										</div>

										<div class="emoji-container">
											<img class="wow-icon" src="../../src/wow-icon.svg">
										</div>

										<div class="emoji-container">
											<img class="sad-icon" src="../../src/sad-icon.webp">
										</div>

										<div class="emoji-container">
											<img class="angry-icon" src="../../src/angry-icon.png">
										</div>
									</div>
								</div>

								<button>Edit</button>
								<button>Delete</button>
							</div>

							<div class="date-posted">Date Posted: 4/19/2024, 8:39:45 PM</div>
						</div>
					</div>
					<!--Comment Section-->

					<div class="profile-container comment-profile-container">
						<div class="user-profile">
							<img src="../../src/cat-profile.png">
						</div>

						<div class="textarea-comment-container">
							<textarea class="comment-input" rows="1" oninput="controller_Textarea_ResizeTextArea(this)" placeholder="Write a comment..."></textarea>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
	<!--_Modal Post-->
	<!--Modals-->

	<!--Javascripts-->
	<!--_Dependencies-->
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeLayOneNavScript.js"></script>
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeScript.js"></script>
	<!--_Dependencies-->

	<!--_Mike JS-->
	<!--<script type="text/javascript" src="../Client Side/Posting Page.js"></script>-->
	<!--_Mike JS-->

	<!--_Controllers-->
	<script type="module" src="../../Global Client Side/Controller_Btn_ChangeMode.js"></script>
	<script type="module" src="../Client Side/Controller_Textarea_ResizeTextArea.js"></script>
	<script type="module" src="../Client Side/Controller_InputFile_UploadFile.js"></script>
	<script type="module" src="../Client Side/Controller_Div_ToggleComments.js"></script>
	<script type="module" src="../Client Side/Controller_Div_ToggleModalComments.js"></script>
	<script type="module" src="../Client Side/Controller_Div_DisplayRightSideContent.js"></script>
	<script type="module" src="../Client Side/Controller_Div_DisplayChatbox.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_CloseChatbox.js"></script>
	<script type="module" src="../Client Side/Controller_Div_ToggleContacts.js"></script>
	<!--_Controllers-->

	<!--_Executor-->
	<script type="module" src="../Client Side/Executor_Page_Posting.js"></script>
	<script type="module" src="../../Global Client Side/Executor_Global.js"></script>
	<!--_Executor-->
	<!--Javascripts-->
</body>
</html>