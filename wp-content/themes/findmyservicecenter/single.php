<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package findmyservicecenter
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="section">
        <div class="wrap">
            <div class="row">
                <div class="col-6">
                    <div class="service__image">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tem1.jpg" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="service__info">
                        <h1 class="mb-0">Vivo Service Center</h1>
                        <div class="stars__rating mb-32">
                            <span class="reviews-avg">4.0</span>
                            <span class="star-icon filled">★</span>
                            <span class="star-icon filled">★</span>
                            <span class="star-icon filled">★</span>
                            <span class="star-icon filled">★</span>
                            <span class="star-icon">★</span>
                            <span class="reviews-text">468 reviews</span>
                        </div>
                        <address class="address__block">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.91504 9.14648C4.91504 7.58005 5.5373 6.07777 6.64494 4.97013C7.75258 3.8625 9.25486 3.24023 10.8213 3.24023C12.3877 3.24023 13.89 3.8625 14.9976 4.97013C16.1053 6.07777 16.7275 7.58005 16.7275 9.14648C16.7275 11.5694 14.789 14.7272 10.8213 18.5099C6.8536 14.7272 4.91504 11.5694 4.91504 9.14648ZM10.8213 20.3027C15.6342 15.9282 18.04 12.2085 18.04 9.14648C18.04 7.23195 17.2795 5.39584 15.9257 4.04206C14.5719 2.68828 12.7358 1.92773 10.8213 1.92773C8.90676 1.92773 7.07064 2.68828 5.71686 4.04206C4.36308 5.39583 3.60254 7.23195 3.60254 9.14648C3.60254 12.2085 6.00835 15.9282 10.8213 20.3027Z"
                                    fill="#5B5B5B" />
                                <path
                                    d="M10.8213 11.1152C10.2991 11.1152 9.79838 10.9078 9.42917 10.5386C9.05996 10.1694 8.85254 9.66863 8.85254 9.14648C8.85254 8.62434 9.05996 8.12358 9.42917 7.75437C9.79839 7.38516 10.2991 7.17773 10.8213 7.17773C11.3434 7.17773 11.8442 7.38516 12.2134 7.75437C12.5826 8.12358 12.79 8.62434 12.79 9.14648C12.79 9.66863 12.5826 10.1694 12.2134 10.5386C11.8442 10.9078 11.3434 11.1152 10.8213 11.1152ZM10.8213 12.4277C11.6915 12.4277 12.5261 12.082 13.1415 11.4667C13.7568 10.8513 14.1025 10.0167 14.1025 9.14648C14.1025 8.27624 13.7568 7.44164 13.1415 6.82629C12.5261 6.21094 11.6915 5.86523 10.8213 5.86523C9.95105 5.86523 9.11645 6.21094 8.5011 6.82629C7.88574 7.44164 7.54004 8.27624 7.54004 9.14648C7.54004 10.0167 7.88574 10.8513 8.5011 11.4667C9.11645 12.082 9.95105 12.4277 10.8213 12.4277Z"
                                    fill="#5B5B5B" />
                            </svg>
                            Mrs Polly Jones<br>
                            c/o Henry Roth<br>
                            50 Oakland Ave,#206<br>
                            A city, Florida,<br>
                            United Status of amERICA<br>
                        </address>
                        <div class="phone__number">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.7804 17.0674L15.6907 17.0774C5.24516 17.5963 2.744 8.49022 2.22434 5.68415C2.18335 5.46604 2.18338 5.24206 2.2244 5.02505C2.26543 4.80803 2.34666 4.60225 2.46343 4.41948C2.58021 4.23672 2.73023 4.08057 2.90491 3.95998C3.07959 3.83938 3.27549 3.75672 3.48139 3.71673L6.39074 3.39408C6.60221 3.3704 6.81634 3.41451 7.00537 3.52069C7.1944 3.62687 7.34964 3.79022 7.45097 3.98959L8.48543 5.99151C8.58525 6.18619 8.62914 6.40687 8.61164 6.62614C8.59415 6.84541 8.51605 7.05361 8.38703 7.22487L7.39567 8.55161C7.68858 9.58919 8.27474 10.5106 9.07486 11.1911C9.87497 11.8717 10.8504 12.2786 11.8692 12.3567L12.8817 11.0276C13.0134 10.858 13.1898 10.7338 13.3891 10.6705C13.5883 10.6071 13.8015 10.6074 14.0021 10.6713L16.0863 11.2948C16.2893 11.3588 16.4705 11.485 16.6067 11.6574C16.7429 11.8297 16.828 12.0404 16.8511 12.2626L17.1785 15.2145C17.2278 15.6593 17.1082 16.1044 16.846 16.4519C16.5839 16.7994 16.2005 17.0208 15.7804 17.0674ZM3.73212 4.82082C3.59208 4.83635 3.46431 4.91015 3.37691 5.02598C3.28952 5.1418 3.24966 5.29018 3.26611 5.43845L3.27107 5.48318C3.88101 8.76595 6.30668 16.4202 15.6247 15.9528C15.6946 15.9496 15.763 15.9319 15.8261 15.9006C15.8891 15.8694 15.9456 15.8252 15.9922 15.7706C16.0387 15.716 16.0746 15.6521 16.0976 15.5825C16.1205 15.5129 16.1303 15.4391 16.1262 15.3652L15.7951 12.3797L13.7108 11.7563L12.3721 13.5177L12.115 13.5123C7.45368 13.4123 6.2912 8.6175 6.28562 8.56718L6.22418 8.30234L7.54579 6.5315L6.52002 4.51163L3.73212 4.82082Z"
                                    fill="#5B5B5B" />
                            </svg>
                            +1 (650) 513-0514
                        </div>
                        <ul class="social-link">
                            <li>
                                <a href="https://www.facebook.com/" title="Facebook" itemprop="sameAs" target="_blank">
                                    <svg viewBox="0 0 512 512" width="20" height="20"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path
                                            d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" title="Twitter" itemprop="sameAs" target="_blank">
                                    <svg viewBox="0 0 512 512" width="20" height="20"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path
                                            d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" title="Instagram" itemprop="sameAs"
                                    target="_blank">
                                    <svg viewBox="0 0 512 512" width="20" height="20"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path
                                            d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z">
                                        </path>
                                        <path
                                            d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z">
                                        </path>
                                        <circle cx="351.5" cy="160.5" r="21.5"></circle>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/" title="LinkedIn" itemprop="sameAs"
                                    target="_blank">
                                    <svg viewBox="0 0 512 512" width="20" height="20"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path
                                            d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="wrap">
            <div class="row no-guttor">
                <div class="col-4">
                    <div class="service__operation">
                        <div class="timing__block mb-32">
                            <h4>Hours of Operation</h4>
                            <ul>
                                <li><span>Monday</span> 10:00 am - 6:30 pm</li>
                                <li><span>Tuesday</span> 10:00 am - 6:30 pm</li>
                                <li><span>Wednesday</span> 10:00 am - 6:30 pm</li>
                                <li><span>Thursday</span> 10:00 am - 6:30 pm</li>
                                <li><span>Friday</span> 10:00 am - 6:30 pm</li>
                                <li><span>Saturday</span> 10:00 am - 6:30 pm</li>
                            </ul>
                        </div>
                        <div class="service__contact mb-32">
                            <ul>
                                <li>
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_22_313)">
                                            <path
                                                d="M13.2406 13.8511L13.169 13.8591C4.82992 14.2733 2.83315 7.00365 2.41829 4.76346C2.38557 4.58934 2.38559 4.41052 2.41834 4.23727C2.4511 4.06402 2.51594 3.89974 2.60917 3.75383C2.70239 3.60792 2.82216 3.48326 2.96162 3.38699C3.10107 3.29071 3.25746 3.22472 3.42184 3.19279L5.74448 2.93521C5.91331 2.91631 6.08425 2.95152 6.23517 3.03629C6.38608 3.12105 6.51001 3.25146 6.5909 3.41063L7.41676 5.00884C7.49644 5.16426 7.53148 5.34044 7.51751 5.51549C7.50355 5.69054 7.44119 5.85675 7.3382 5.99348L6.54676 7.05266C6.7806 7.881 7.24856 8.61658 7.88732 9.1599C8.52608 9.70321 9.30481 10.028 10.1182 10.0904L10.9265 9.02935C11.0316 8.89396 11.1724 8.7948 11.3315 8.74421C11.4906 8.69363 11.6608 8.69387 11.8209 8.74491L13.4848 9.24262C13.6469 9.29372 13.7915 9.39449 13.9002 9.5321C14.009 9.66971 14.0769 9.83791 14.0954 10.0153L14.3567 12.3719C14.3961 12.727 14.3006 13.0824 14.0913 13.3598C13.882 13.6372 13.576 13.8139 13.2406 13.8511ZM3.622 4.07423C3.51021 4.08663 3.4082 4.14554 3.33843 4.23801C3.26866 4.33048 3.23684 4.44893 3.24997 4.56731L3.25393 4.60301C3.74087 7.22377 5.67738 13.3345 13.1163 12.9613C13.1721 12.9588 13.2267 12.9446 13.2771 12.9197C13.3274 12.8947 13.3725 12.8594 13.4097 12.8158C13.4468 12.7723 13.4754 12.7212 13.4938 12.6657C13.5122 12.6102 13.5199 12.5512 13.5166 12.4922L13.2523 10.1088L11.5884 9.61107L10.5197 11.0173L10.3144 11.0129C6.59307 10.9332 5.66502 7.10526 5.66057 7.06509L5.61152 6.85366L6.66661 5.43993L5.8477 3.8274L3.622 4.07423Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_22_313">
                                                <rect width="13.5717" height="14.3701" fill="white"
                                                    transform="translate(0.845215 2.12305) rotate(-6.32838)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <a href="tel:+1800-208-4488">1800-208-4488</a>
                                </li>
                                <li>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.88184 6.90918C3.88184 5.7157 4.35594 4.57111 5.19986 3.7272C6.04377 2.88328 7.18836 2.40918 8.38184 2.40918C9.57531 2.40918 10.7199 2.88329 11.5638 3.7272C12.4077 4.57111 12.8818 5.71571 12.8818 6.90918C12.8818 8.75518 11.4048 11.1612 8.38184 14.0432C5.35884 11.1612 3.88184 8.75518 3.88184 6.90918ZM8.38184 15.4092C12.0488 12.0762 13.8818 9.24218 13.8818 6.90918C13.8818 5.45049 13.3024 4.05154 12.2709 3.02009C11.2395 1.98864 9.84053 1.40918 8.38184 1.40918C6.92315 1.40918 5.5242 1.98864 4.49275 3.02009C3.4613 4.05154 2.88184 5.45049 2.88184 6.90918C2.88184 9.24218 4.71484 12.0762 8.38184 15.4092Z"
                                            fill="white" />
                                        <path
                                            d="M8.38184 8.40918C7.98401 8.40918 7.60248 8.25115 7.32118 7.96984C7.03987 7.68854 6.88184 7.307 6.88184 6.90918C6.88184 6.51136 7.03987 6.12982 7.32118 5.84852C7.60248 5.56721 7.98401 5.40918 8.38184 5.40918C8.77966 5.40918 9.16119 5.56721 9.4425 5.84852C9.7238 6.12982 9.88184 6.51136 9.88184 6.90918C9.88184 7.307 9.7238 7.68854 9.4425 7.96984C9.16119 8.25115 8.77966 8.40918 8.38184 8.40918ZM8.38184 9.40918C9.04488 9.40918 9.68076 9.14579 10.1496 8.67695C10.6184 8.20811 10.8818 7.57222 10.8818 6.90918C10.8818 6.24614 10.6184 5.61025 10.1496 5.14141C9.68076 4.67257 9.04488 4.40918 8.38184 4.40918C7.7188 4.40918 7.08291 4.67257 6.61407 5.14141C6.14523 5.61025 5.88184 6.24614 5.88184 6.90918C5.88184 7.57222 6.14523 8.20811 6.61407 8.67695C7.08291 9.14579 7.71879 9.40918 8.38184 9.40918Z"
                                            fill="white" />
                                    </svg>

                                    Shop No 06, Ground Floor, White House Complex,
                                    Gandhinagar Sector 11, Gandhinagar-Gujarat -
                                    382010, Near Vijay Petrol Pump (Map)
                                </li>
                                <li>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_22_349)">
                                            <path
                                                d="M6.73184 0.802734C5.18032 0.802734 3.69235 1.41907 2.59526 2.51616C1.49817 3.61325 0.881836 5.10122 0.881836 6.65273C0.881836 8.20425 1.49817 9.69222 2.59526 10.7893C3.69235 11.8864 5.18032 12.5027 6.73184 12.5027C8.28335 12.5027 9.77132 11.8864 10.8684 10.7893C11.9655 9.69222 12.5818 8.20425 12.5818 6.65273C12.5818 5.10122 11.9655 3.61325 10.8684 2.51616C9.77132 1.41907 8.28335 0.802734 6.73184 0.802734V0.802734ZM1.60334 7.09473H3.23484C3.26084 7.68623 3.34339 8.27383 3.48184 8.84973H2.07784C1.81602 8.29781 1.65531 7.7034 1.60334 7.09473ZM7.17384 3.58473V1.57623C7.80023 1.81428 8.31495 2.27799 8.61684 2.87623C8.75009 3.10178 8.86774 3.33643 8.96784 3.57823L7.17384 3.58473ZM9.26684 4.46223C9.41763 5.03618 9.50734 5.62443 9.53334 6.21723H7.17384V4.46223H9.26684ZM6.28984 1.57623V3.58473H4.49584C4.59611 3.34274 4.7134 3.10815 4.84684 2.88273C5.14744 2.28204 5.66232 1.81586 6.28984 1.57623ZM6.28984 4.46223V6.21723H3.93684C3.96284 5.62443 4.05254 5.03618 4.20334 4.46223H6.28984ZM3.23484 6.21073H1.60334C1.65531 5.60207 1.81602 5.00766 2.07784 4.45573H3.48184C3.34312 5.0314 3.2604 5.61914 3.23484 6.21073ZM3.93684 7.09473H6.28984V8.84973H4.20334C4.05256 8.27583 3.96322 7.68753 3.93684 7.09473ZM6.29634 9.69473V11.7032C5.66994 11.4652 5.15523 11.0015 4.85334 10.4032C4.7199 10.1778 4.60261 9.94323 4.50234 9.70123L6.29634 9.69473ZM7.17384 11.7032V9.72723H8.96784C8.86757 9.96923 8.75027 10.2038 8.61684 10.4292C8.31495 11.0275 7.80023 11.4912 7.17384 11.7292V11.7032ZM7.17384 8.81723V7.06223H9.52684C9.50045 7.65503 9.41111 8.24333 9.26034 8.81723H7.17384ZM10.2353 7.06223H11.8668C11.8149 7.6709 11.6542 8.26531 11.3923 8.81723H9.98184C10.1183 8.25173 10.2009 7.67518 10.2288 7.09473L10.2353 7.06223ZM10.2353 6.18473C10.2056 5.60384 10.1207 5.02708 9.98184 4.46223H11.3858C11.6478 5.01473 11.8083 5.60883 11.8603 6.21723L10.2353 6.18473ZM10.8853 3.58473H9.72184C9.51132 2.99343 9.20618 2.44023 8.81834 1.94673C9.62718 2.30981 10.3298 2.87367 10.8593 3.58473H10.8853ZM4.64534 1.94673C4.25749 2.44023 3.95236 2.99343 3.74184 3.58473H2.60434C3.1339 2.87367 3.83649 2.30981 4.64534 1.94673ZM2.59784 9.74673H3.74184C3.95236 10.338 4.25749 10.8912 4.64534 11.3847C3.83425 11.0162 3.13145 10.4454 2.60434 9.72723L2.59784 9.74673ZM8.81184 11.3847C9.19968 10.8912 9.50482 10.338 9.71534 9.74673H10.8593C10.3265 10.4483 9.62423 11.003 8.81834 11.3587L8.81184 11.3847Z"
                                                fill="#F8F8F8" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_22_349">
                                                <rect width="13" height="13" fill="white"
                                                    transform="translate(0.881836 0.802734)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <a href="http://www.vivo.com" target="_blank"
                                        rel="noopener noreferrer">www.vivo.com</a>
                                </li>
                                <li>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.38184 6.19913V11.1611C2.38184 11.6916 2.59255 12.2003 2.96762 12.5753C3.34269 12.9504 3.8514 13.1611 4.38184 13.1611H12.3818C12.9123 13.1611 13.421 12.9504 13.796 12.5753C14.1711 12.2003 14.3818 11.6916 14.3818 11.1611V5.16113C14.3818 4.6307 14.1711 4.12199 13.796 3.74692C13.421 3.37185 12.9123 3.16113 12.3818 3.16113H4.38184C3.8514 3.16113 3.34269 3.37185 2.96762 3.74692C2.59255 4.12199 2.38184 4.6307 2.38184 5.16113V6.19913ZM4.38184 4.16113H12.3818C12.6471 4.16113 12.9014 4.26649 13.0889 4.45403C13.2765 4.64156 13.3818 4.89592 13.3818 5.16113V5.90113L8.38184 8.59313L3.38184 5.90113V5.16113C3.38184 4.89592 3.48719 4.64156 3.67473 4.45403C3.86227 4.26649 4.11662 4.16113 4.38184 4.16113ZM3.38184 7.03713L8.14484 9.60113C8.21768 9.64034 8.29911 9.66087 8.38184 9.66087C8.46456 9.66087 8.54599 9.64034 8.61884 9.60113L13.3818 7.03713V11.1611C13.3818 11.4263 13.2765 11.6807 13.0889 11.8682C12.9014 12.0558 12.6471 12.1611 12.3818 12.1611H4.38184C4.11662 12.1611 3.86227 12.0558 3.67473 11.8682C3.48719 11.6807 3.38184 11.4263 3.38184 11.1611V7.03713Z"
                                            fill="#F8F8F8" />
                                    </svg>
                                    <a href="mailto:services@vivo.com">services@vivo.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">Car Service Center</a></li>
                                <li><a href="#">Mobile Service Center</a></li>
                                <li><a href="#">Computer Service Center</a></li>
                                <li><a href="#">Appliances Service Center</a></li>
                                <li><a href="#">Motorbike Service Center</a></li>
                                <li><a href="#">Mobiles & Accessories</a></li>
                            </ul>
                        </div>
                        <div class="getintouch__form mb-32">
                            <h4>Get In Touch</h4>
                            <from>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control" placeholder="Enter Your name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control" placeholder="Enter Mobile no">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea name="" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-btn">
                                    <input type="submit" name="" class="btn btn--block" value="Submit">
                                </div>
                            </from>

                        </div>
                        <div class="established__list">
                            <h4>Year Established</h4>
                            <ul>
                                <li>2002</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="business__info">
                        <h2>Business Information</h2>
                        <p>Vivo Authorised Service Center in Gandhinagar Sector 11, Gandhinagar-gujarat</p>
                        <p>Is your phone giving you trouble? Does it hang often refraining you from doing your work? If
                            yes,
                            then
                            you need to quickly get in touch with Mobile Phone Repair & Services. These service
                            providers
                            identify
                            the issues with your cell phone and repair them quickly.</p>
                        <p>If you are looking for a good mobile phone repair and service, then connect with Vivo
                            Authorised
                            Service Center in Gandhinagar Sector 11, Gandhinagar-gujarat. Established in 2017, they are
                            a
                            popular
                            choice amongst people for any mobile phone trouble they might face. If you are facing any
                            issues
                            with your phone, we suggest you visit Vivo Authorised Service Center!</p>
                    </div>
                    <div class="review__list">
                        <ol>
                            <li>
                                <div class="review__text">
                                    <div class="stars__rating mb-16">
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon">★</span>
                                    </div>
                                    <p>Is your phone giving you trouble? Does it hang often refraining you from doing
                                        your work? If yes, then you need to quickly get in touch with Mobile Phone
                                        Repair & Services. These service providers identify the issues with your cell
                                        phone and repair them quickly.
                                    </p>
                                    <strong class="review__author">Ashok Ghogha </strong>
                                </div>

                            </li>
                            <li>
                                <div class="review__text">
                                    <div class="stars__rating mb-16">
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon">★</span>
                                    </div>
                                    <p>Is your phone giving you trouble? Does it hang often refraining you from doing
                                        your work? If yes, then you need to quickly get in touch with Mobile Phone
                                        Repair & Services. These service providers identify the issues with your cell
                                        phone and repair them quickly.
                                    </p>
                                    <strong class="review__author">Ashok Ghogha </strong>
                                </div>

                            </li>
                            <li>
                                <div class="review__text">
                                    <div class="stars__rating mb-16">
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon filled">★</span>
                                        <span class="star-icon">★</span>
                                    </div>
                                    <p>Is your phone giving you trouble? Does it hang often refraining you from doing
                                        your work? If yes, then you need to quickly get in touch with Mobile Phone
                                        Repair & Services. These service providers identify the issues with your cell
                                        phone and repair them quickly.
                                    </p>
                                    <strong class="review__author">Ashok Ghogha </strong>
                                </div>

                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
		while ( have_posts() ) :
			the_post(); ?>

    <?php // get_template_part( 'template-parts/content', get_post_type() ); ?>

    <?php 
			if ( comments_open() || get_comments_number() ) :
				//comments_template();
			endif;

		endwhile; // End of the loop.
		?>

</main><!-- #main -->

<?php
get_footer();