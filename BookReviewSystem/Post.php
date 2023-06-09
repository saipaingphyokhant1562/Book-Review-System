<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Book Review System</title>
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		/>
		<link
			rel="stylesheet"
			href="style.css"
		/>
		<link
			rel="stylesheet"
			href="Post.css"
		/>
        <link rel="stylesheet" href="Review.css">
	</head>
	<body>
		<!-- Navigation bar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a
				class="navbar-brand-logo"
				href="#"
			>
				<img
					src="logo.png"
					style="width: 200px; height: 100px"
					alt="Book Review System Logo"
				/>
			</a>

			<button
				class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#navbarNav"
				aria-controls="navbarNav"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div
				class="collapse navbar-collapse justify-content-end"
				id="navbarNav"
			>
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a
							class="nav-link"
							href="index.php"
							>Home</a
						>
					</li>

					<li class="nav-item">
						<a
							class="nav-link"
							href="AuthorPage.php"
							>Author</a
						>
					</li>
					<li class="nav-item">
						<a
							class="nav-link"
							href="Review.php"
							>Reviews</a
						>
					</li>

					<li class="nav-item hide-in-large">
						<a
							class="nav-link"
							href="Profile.php"
							>Profile</a
						>
					</li>
					<li class="nav-item account">
						<a href="Profile.php">
							<div class="avatar">
								<img
									src="user-avatar.jpg"
									alt="User Avatar"
								/>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container mt-4">
			<h1>Upload Review</h1>
			<form id="upload-form">
				<div class="form-group">
					<label for="review-content">Review</label>
					<textarea
						id="review-content"
						name="review-content"
						rows="8"
						required
					></textarea>
				</div>
                <div class="container">
                    <div class="d-flex flex-wrap">
                        <a href="BookDetail.php">
                            <div class="book-details">
                                <img
                                    src="book-image.jpg"
                                    alt="Book Cover"
                                />
                                <div class="book-info">
                                    <h2>The Book Title</h2>
                                    <p>by Author Name</p>
                                </div>
                            </div>
                        </a>
                        <a href="BookDetail.php">
                            <div class="book-details">
                                <img
                                    src="book-image.jpg"
                                    alt="Book Cover"
                                />
                                <div class="book-info">
                                    <h2>The Book Title</h2>
                                    <p>by Author Name</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="container mt-4">
                    <div class="book-card-list">
                        <!-- Search Bar -->
                        <div class="search-bar">
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search..."
                                />
                                <div class="input-group-append">
                                    <button
                                        class="btn btn-primary"
                                        type="button"
                                    >
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
    
                        <div class="book-card-grid">
                            <div class="book-card">
                                <div class="book-card-image">
                                    <img
                                        src="book-image.jpg"
                                        alt="Book 1"
                                    />
                                    <div class="book-card-overlay">
                                        <a
                                            href="#"
                                            class="book-card-button"
                                            >Read More</a
                                        >
                                    </div>
                                </div>
                                <div class="book-card-info">
                                    <h3 class="book-card-title">Book 1</h3>
                                    <p class="book-card-author">Author: John Doe</p>
                                    <p class="book-card-genre">Genre: Fiction</p>
                                </div>
                            </div>
                            <div class="book-card">
                                <div class="book-card-image">
                                    <img
                                        src="book-image.jpg"
                                        alt="Book 2"
                                    />
                                    <div class="book-card-overlay">
                                        <a
                                            href="#"
                                            class="book-card-button"
                                            >Read More</a
                                        >
                                    </div>
                                </div>
                                <div class="book-card-info">
                                    <h3 class="book-card-title">Book 2</h3>
                                    <p class="book-card-author">Author: Jane Smith</p>
                                    <p class="book-card-genre">Genre: Mystery</p>
                                </div>
                            </div>
                            <div class="book-card">
                                <div class="book-card-image">
                                    <img
                                        src="book-image.jpg"
                                        alt="Book 3"
                                    />
                                    <div class="book-card-overlay">
                                        <a
                                            href="#"
                                            class="book-card-button"
                                            >Read More</a
                                        >
                                    </div>
                                </div>
                                <div class="book-card-info">
                                    <h3 class="book-card-title">Book 3</h3>
                                    <p class="book-card-author">Author: Michael Johnson</p>
                                    <p class="book-card-genre">Genre: Fantasy</p>
                                </div>
                            </div>
                            <div class="book-card">
                                <div class="book-card-image">
                                    <img
                                        src="book-image.jpg"
                                        alt="Book 3"
                                    />
                                    <div class="book-card-overlay">
                                        <a
                                            href="#"
                                            class="book-card-button"
                                            >Read More</a
                                        >
                                    </div>
                                </div>
                                <div class="book-card-info">
                                    <h3 class="book-card-title">Book 3</h3>
                                    <p class="book-card-author">Author: Michael Johnson</p>
                                    <p class="book-card-genre">Genre: Fantasy</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="mt-4"
                            style="display: flex; justify-content: center; width: 100%"
                        >
                            <a
                                href=""
                                class="btn btn-primary m-auto"
                                >Load More</a
                            >
                        </div>
                    </div>
                </div>
				<button type="submit" class="mt-4">Upload</button>
			</form>
		</div>

		<!-- Footer -->
		<footer class="footer mt-4">
			<div class="footer-container">
				<div class="footer-content">
					<div class="footer-section">
						<h4 class="text-center">About Us</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
							aliquet semper sapien, ut sodales lectus tincidunt et.
						</p>
					</div>
					<div class="footer-section">
						<h4 class="text-center">Quit Link</h4>
						<div class="Quick-Link">
							<ul>
								<li class="">
									<a
										href="#"
										class=""
										>FAQ</a
									>
								</li>
								<li class="">
									<a
										href="#"
										class=""
										>Support</a
									>
								</li>

								<li class="">
									<a
										href="#"
										class=""
										>Contact Us</a
									>
								</li>
							</ul>
							<ul>
								<li class="">
									<a
										href="#"
										class=""
										>About us</a
									>
								</li>
								<li class="">
									<a
										href="#"
										class=""
										>BookMark</a
									>
								</li>

								<li class="">
									<a
										href="#"
										class=""
										>Profile</a
									>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer-section">
						<h4 class="text-center">Follow Us</h4>
						<ul class="social-links">
							<li>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-youtube"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<p class="text-center mt-4">
					© 2023 Book Review System. All rights reserved.
				</p>
			</div>
		</footer>

		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script src="app.js"></script>
		<script src="Post.js"></script>
	</body>
</html>
