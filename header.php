<link rel="stylesheet" href="/header.css">

<header class="header">
    <!-- <div class="top">

        </div> -->
    <div class="grid wide">

        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar__logo">
                <a href="/main.php" class="navbar__logo-link">
                    <img src="/img/findy-logo-ngang.png" alt="Findy" class="navbar__logo-img">
                </a>
            </div>

            <div class="navbar__heading-warp">
                <div class="navbar__heading">
                    <a href="/userful/hirephoto.php" class="navbar__heading-link">Thuê Thợ</a>
                </div>
                <div class="navbar__heading">
                    <a href="/userful/jobsearch.php" class="navbar__heading-link">Tìm việc</a>
                </div>
                <div class="navbar__heading">
                    <a href="/userful/create_profile.php" class="navbar__heading-link">Tạo hồ sơ</a>
                </div>
                <div class="navbar__heading">
                    <a href="#" class="navbar__heading-link">Blog</a>
                </div>
            </div>

            <div class="navbar__heading-search">
                <i class="navbar__search-icon fa-solid fa-magnifying-glass"></i>
                <input type="text" class="navbar__search-input" placeholder="Tìm kiếm">
            </div>

            <div class="navbar__heading-controls">
                <div class="navbar__heading">
                    <div onclick="showLoginForm()" class="navbar__heading-link">Đăng nhập</div>
                </div>
                <div class="navbar__heading">
                    <div onclick="showchoice_service()" class="btn btn--primary navbar__heading-link">Đăng ký</div>
                </div>
            </div>

            <!-- Mobile menu icon -->
            <label for="mobile-bars-checkbox" class="navbar__mobile-bars">
                <i class="navbar__heading-icon fa-solid fa-bars"></i>
            </label>
        </nav>

        <input type="checkbox" hidden id="mobile-bars-checkbox" class="navbar__bars-checkbox">

        <!-- Mobile menu -->
        <div class="mobile__menu">
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                <div onclick="showchoice_service()" class="mobile__heading-link">Đăng ký</div>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                <div onclick="showLoginForm()" class="mobile__heading-link">Đăng nhập</div>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-users-between-lines"></i>
                <a href="./userful/hirephoto.php" class="mobile__heading-link">Thuê Thợ</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-magnifying-glass"></i>
                <a href="./userful/jobsearch.php" class="mobile__heading-link">Tìm việc</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-pen"></i>
                <a href="./userful/create_profile.php" class="mobile__heading-link">Tạo hồ sơ</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-file-pen"></i>
                <a href="" class="mobile__heading-link">Blog</a>
            </div>
        </div>
    </div>
</header>

<div class="choice_service">
    <div class="choice_service_container">
        <h3 class="choice_service_container-heading">Bạn là thợ hay người thuê?</h3>
        <div class="choice_service_content">
            <div class="choice_service_content_container">
                <!-- <button onclick="showRegisterForm()">Muốn làm người thuê</button>
                <button onclick="showRegisterForm2()">Muốn làm thợ</button> -->
                <div class="choice_service_content-btn" onclick="showRegisterForm2()">
                    <img src="./img/lam-tho.png" alt="Muốn làm thợ" class="choice_service_content-img">
                    <div class="choice_service_content-text">Muốn làm thợ</div>
                </div>
                <div class="choice_service_content-btn" onclick="showRegisterForm()">
                    <img src="./img/lam-nguoi-thue.png" alt="Muốn làm người thuê" class="choice_service_content-img">
                    <div class="choice_service_content-text">Muốn làm người thuê</div>
                </div>
            </div>
        </div>
        <div class="account_form__footer">
            <p class="account_form__text">
                Bạn đã có tài khoản Findy?
                <a href="#" class="account_form__link" onclick="showLoginForm()">Đăng nhập</a>
            </p>
        </div>
    </div>
</div>

<div class="modal">
    <div class="modal__container">
        <?php
        include "connect.php";
        ?>
        <?php
        $connect = new connect;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $insert_accountthue = $connect->insert_accountthue();
        }
        ?>
        <form class="account_form hidden" id="register-form" method="POST">
            <div class="account_form__container">
                <h3 class="account_form__heading">Đăng ký thuê</h3>

                <div class="account_form__form">
                    <input name="hoTen" type="text" class="account_form__input" placeholder="Họ và tên">
                    <input name="Email" type="email" class="account_form__input" placeholder="Email">
                    <input name="matKhau" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                    <input name="repeatmatKhau" type="password" class="account_form__input" placeholder="Nhập lại mật khẩu">
                </div>

                <div class="account_form__aside">
                    <p class="account_form__policy-text">
                        Tôi đã đọc và đồng ý với
                        <a href="" class="account_form__policy-link">Điều khoản dịch vụ Findy</a>,
                        bao gồm
                        <a href="" class="account_form__policy-link">Thỏa thuận người dùng</a>
                        và
                        <a href="" class="account_form__policy-link">Chính sách bảo mật</a>.
                    </p>
                </div>

                <button type="submit" class="btn btn--primary account_form__btn">Đăng ký</button>
            </div>

            <div class="account_form__socials">
                <p class="account_form__separate">
                    <span class="account_form__separate-text">Hoặc</span>
                </p>

                <div class="account_form__socials-list">
                    <a href="" class="btn account_form__socials--facebook">
                        <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                        <span class="account_form__socials-title">
                            Facebook
                        </span>
                    </a>
                    <a href="" class="btn account_form__socials--google">
                        <span class="account_form__socials-icon">
                            <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g data-v-48748210="">
                                    <path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                    <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                    <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                    <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                    <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="account_form__socials-title">
                            Google
                        </span>
                    </a>
                </div>
            </div>

            <div class="account_form__footer">
                <p class="account_form__text">
                    Bạn đã có tài khoản Findy?
                    <a href="#" class="account_form__link" onclick="showLoginForm()">Đăng nhập</a>
                </p>
            </div>
        </form>
        <?php
        $connect = new connect;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $insert_accounttho = $connect->insert_accounttho();
        }
        ?>
        <form class="account_form2 hidden" id="register-form2" method="POST">
            <div class="account_form__container">
                <h3 class="account_form__heading">Đăng ký thợ</h3>

                <div class="account_form__form">
                    <input name="hoTen2" type="text" class="account_form__input" placeholder="Họ và tên">
                    <input name="Email2" type="email" class="account_form__input" placeholder="Email">
                    <input name="matKhau2" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                    <input name="repeatmatKhau2" type="password" class="account_form__input" placeholder="Nhập lại mật khẩu">
                </div>

                <div class="account_form__aside">
                    <p class="account_form__policy-text">
                        Tôi đã đọc và đồng ý với
                        <a href="" class="account_form__policy-link">Điều khoản dịch vụ Findy</a>,
                        bao gồm
                        <a href="" class="account_form__policy-link">Thỏa thuận người dùng</a>
                        và
                        <a href="" class="account_form__policy-link">Chính sách bảo mật</a>.
                    </p>
                </div>

                <button type="submit" class="btn btn--primary account_form__btn">Đăng ký</button>
            </div>

            <div class="account_form__socials">
                <p class="account_form__separate">
                    <span class="account_form__separate-text">Hoặc</span>
                </p>

                <div class="account_form__socials-list">
                    <a href="" class="btn account_form__socials--facebook">
                        <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                        <span class="account_form__socials-title">
                            Facebook
                        </span>
                    </a>
                    <a href="" class="btn account_form__socials--google">
                        <span class="account_form__socials-icon">
                            <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g data-v-48748210="">
                                    <path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                    <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                    <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                    <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                    <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="account_form__socials-title">
                            Google
                        </span>
                    </a>
                </div>
            </div>

            <div class="account_form__footer">

                <p class="account_form__text">
                    Bạn đã có tài khoản Findy?
                    <a href="#" class="account_form__link" onclick="showLoginForm()">Đăng nhập</a>
                </p>
            </div>
        </form>

        <form class="account_form hidden" id="login-form" method="POST" action="login_process.php">
            <div class="account_form__container">
                <h3 class="account_form__heading">Đăng nhập</h3>

                <div class="account_form__form">
                    <input name="Emailuser" type="email" class="account_form__input" placeholder="Email">
                    <input name="Passworduser" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                </div>

                <button type="submit" class="btn btn--primary account_form__btn">Đăng nhập</button>
            </div>

            <div class="account_form__socials">
                <p class="account_form__separate">
                    <span class="account_form__separate-text">Hoặc</span>
                </p>

                <div class="account_form__socials-list">
                    <a href="" class="btn account_form__socials--facebook">
                        <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                        <span class="account_form__socials-title">
                            Facebook
                        </span>
                    </a>
                    <a href="" class="btn account_form__socials--google">
                        <span class="account_form__socials-icon">
                            <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g data-v-48748210="">
                                    <path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                    <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                    <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                    <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                    <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="account_form__socials-title">
                            Google
                        </span>
                    </a>
                </div>
            </div>

            <div class="account_form__footer">

                <p class="account_form__text">
                    Bạn chưa có tài khoản Findy?
                    <a href="#" class="account_form__link" onclick="showchoice_service()">Đăng ký</a>
                </p>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./main.js"></script>