<footer>
    @if(!request()->routeIs('show'))
        <FooterBar>
            <section id="shop-sections">
                <ul class="links-pic">
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="kindle">
                            <h4>DIGITAL COMICS</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="maglietta">
                            <h4>DC MERCHANDISE</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="tessere">
                            <h4>SUBSCRIPTION</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                                alt="icona della posizione">
                            <h4>COMIC SHOP LOCATOR</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="visa" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="carta visa">
                            <h4>DC POWER VISA</h4>
                        </a>
                    </li>
                </ul>
            </section>
        </FooterBar>
    @endif
        <section id="site-links">
            <div class="lists-row">
                <div>
                    <h5>DC COMICS</h5>
                    <ul>
                        <li>
                            <a href="#">
                                Characters
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Comics
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Movies
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                TV
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Games
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Videos
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                News
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5>SHOP</h5>
                    <ul>
                        <li>
                            <a href="#">
                                Shop DC
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Shop DC Collectibles
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>DC</h5>
                    <ul>
                        <li>
                            <a href="#">
                                Terms of Use
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Privacy policy (New)
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Ad Choices
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Advertising
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Jobs
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Subscriptions
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Talent Workshops
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                CPSC Certificates
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Ratings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Shop Help
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5>SITES</h5>
                    <ul>
                        <li>
                            <a href="#">
                                DC
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                MAD Magazine
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                DC Kids
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                DC Universe
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                DC Power Visa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="button-links">
            <nav class="lower-footer">
                <div>
                    <button class="sign-up">SIGN-UP NOW!</button>
                </div>
                <div class="f-links">
                    <h5>FOLLOW US</h5>
                    <ul class="links-list">
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}"
                                    alt="logo di facebook" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="logo di twitter" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="logo di youtube" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}"
                                    alt="logo di pinterest" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}"
                                    alt="logo di periscope" />
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


        </section>
    </footer>