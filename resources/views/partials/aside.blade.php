<aside class="sm:block hidden w-64 shadow-sm h-screen relative z-50 bg-white">
    <div class="flex mx-auto w-fit h-fit">
        <div class="w-12 h-12 bg-primary rounded-lg">

        </div>
        <div class="ml-4">
            <p class="font-bold text-[20px] leading-7">Ayo Konsul</p>
            <p class="text-non-active text-base leading-4">@yield('sub_title')</p>
        </div>
    </div>
    {{-- list --}}
    <div class="mx-auto w-fit h-fit mt-16">
        <ul>
            <li>
                <a href="{{ route('dashboard') }}">
                    <div class="{{ Request::is('dashboard*') ? 'icon-active' : '' }}">
                        <svg width="35" height="35" viewBox="0 0 70 70" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32.1708 7.55417C32.9615 6.88464 33.964 6.51721 35 6.51721C36.036 6.51721 37.0385 6.88464 37.8292 7.55417L59.7042 26.1129C60.1886 26.5236 60.5777 27.0348 60.8447 27.611C61.1116 28.1872 61.2499 28.8146 61.25 29.4496V56.875C61.25 58.0353 60.7891 59.1481 59.9686 59.9686C59.1481 60.7891 58.0353 61.25 56.875 61.25H40.1042C39.524 61.25 38.9676 61.0195 38.5574 60.6093C38.1471 60.1991 37.9167 59.6427 37.9167 59.0625V40.8333H32.0833V59.0625C32.0833 59.6427 31.8529 60.1991 31.4426 60.6093C31.0324 61.0195 30.476 61.25 29.8958 61.25H13.125C11.9647 61.25 10.8519 60.7891 10.0314 59.9686C9.21094 59.1481 8.75 58.0353 8.75 56.875V29.4496C8.75 28.1663 9.31583 26.9442 10.2958 26.1129L32.1708 7.55417ZM35 10.8908L13.125 29.4496V56.875H27.7083V38.6458C27.7083 38.0657 27.9388 37.5093 28.349 37.099C28.7593 36.6888 29.3157 36.4583 29.8958 36.4583H40.1042C40.6843 36.4583 41.2407 36.6888 41.651 37.099C42.0612 37.5093 42.2917 38.0657 42.2917 38.6458V56.875H56.875V29.4496L35 10.8908Z"
                                fill="{{ Request::is('dashboard*') ? 'white' : '#C0C0C0' }}" />
                        </svg>
                    </div>
                    <p class="ml-3 {{ Request::is('dashboard*') ? 'text-primary' : '' }}">Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('kelas.index') }}">
                    <div class="{{ Request::is('kelas*') ? 'icon-active' : '' }}">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.75 8.75C3.75 8.41848 3.8817 8.10054 4.11612 7.86612C4.35054 7.6317 4.66848 7.5 5 7.5H27.5C27.8315 7.5 28.1495 7.6317 28.3839 7.86612C28.6183 8.10054 28.75 8.41848 28.75 8.75C28.75 9.08152 28.6183 9.39946 28.3839 9.63388C28.1495 9.8683 27.8315 10 27.5 10H5C4.66848 10 4.35054 9.8683 4.11612 9.63388C3.8817 9.39946 3.75 9.08152 3.75 8.75ZM3.75 26.25C3.75 25.9185 3.8817 25.6005 4.11612 25.3661C4.35054 25.1317 4.66848 25 5 25H25C25.3315 25 25.6495 25.1317 25.8839 25.3661C26.1183 25.6005 26.25 25.9185 26.25 26.25C26.25 26.5815 26.1183 26.8995 25.8839 27.1339C25.6495 27.3683 25.3315 27.5 25 27.5H5C4.66848 27.5 4.35054 27.3683 4.11612 27.1339C3.8817 26.8995 3.75 26.5815 3.75 26.25ZM5 16.25C4.66848 16.25 4.35054 16.3817 4.11612 16.6161C3.8817 16.8505 3.75 17.1685 3.75 17.5C3.75 17.8315 3.8817 18.1495 4.11612 18.3839C4.35054 18.6183 4.66848 18.75 5 18.75H30C30.3315 18.75 30.6495 18.6183 30.8839 18.3839C31.1183 18.1495 31.25 17.8315 31.25 17.5C31.25 17.1685 31.1183 16.8505 30.8839 16.6161C30.6495 16.3817 30.3315 16.25 30 16.25H5Z"
                                fill="{{ Request::is('kelas*') ? 'white' : '#C0C0C0' }}" />
                        </svg>
                    </div>
                    <p class="ml-3 {{ Request::is('kelas*') ? 'text-primary' : '' }}">Kelas</p>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <div class="{{ Request::is('user*') ? 'icon-active' : '' }}">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M33.4688 20.5625C33.3539 20.6487 33.2231 20.7114 33.084 20.747C32.9449 20.7827 32.8001 20.7906 32.6579 20.7703C32.5157 20.7499 32.3789 20.7018 32.2553 20.6286C32.1317 20.5555 32.0237 20.4587 31.9375 20.3437C31.2783 19.4576 30.4202 18.7387 29.4324 18.2447C28.4445 17.7508 27.3545 17.4957 26.25 17.5C26.035 17.5 25.8247 17.4365 25.6454 17.3176C25.4662 17.1987 25.326 17.0296 25.2424 16.8314C25.1856 16.6969 25.1564 16.5523 25.1564 16.4062C25.1564 16.2602 25.1856 16.1156 25.2424 15.981C25.326 15.7829 25.4662 15.6138 25.6454 15.4949C25.8247 15.3759 26.035 15.3125 26.25 15.3125C26.8637 15.3124 27.4651 15.1403 27.9859 14.8156C28.5066 14.4909 28.9259 14.0266 29.196 13.4756C29.4662 12.9246 29.5763 12.3088 29.5141 11.6983C29.4518 11.0878 29.2196 10.5069 28.8437 10.0218C28.4679 9.53663 27.9635 9.16661 27.388 8.95373C26.8124 8.74085 26.1886 8.69366 25.5876 8.81751C24.9865 8.94136 24.4322 9.2313 23.9877 9.65438C23.5431 10.0775 23.2261 10.6167 23.0727 11.2109C23.0368 11.3501 22.9738 11.4808 22.8874 11.5956C22.801 11.7104 22.6928 11.8071 22.569 11.8801C22.4452 11.9531 22.3083 12.001 22.166 12.021C22.0237 12.0411 21.8788 12.033 21.7397 11.9971C21.6005 11.9612 21.4698 11.8982 21.355 11.8118C21.2402 11.7253 21.1436 11.6172 21.0706 11.4934C20.9976 11.3696 20.9496 11.2326 20.9296 11.0904C20.9095 10.9481 20.9177 10.8032 20.9536 10.6641C21.1665 9.84007 21.5688 9.07716 22.1285 8.43602C22.6882 7.79488 23.3898 7.29322 24.1775 6.97094C24.9651 6.64867 25.8172 6.51467 26.6657 6.57963C27.5143 6.64458 28.336 6.90669 29.0655 7.34509C29.7949 7.78349 30.412 8.38609 30.8676 9.10494C31.3231 9.82379 31.6047 10.639 31.6897 11.4858C31.7748 12.3326 31.661 13.1876 31.3575 13.9827C31.054 14.7778 30.5691 15.4911 29.9415 16.0658C31.4287 16.7098 32.7216 17.7316 33.6916 19.0299C33.7778 19.1451 33.8404 19.2761 33.8759 19.4156C33.9113 19.555 33.9189 19.7001 33.8982 19.8424C33.8775 19.9848 33.8289 20.1217 33.7552 20.2452C33.6815 20.3688 33.5842 20.4766 33.4688 20.5625ZM26.1024 28.9844C26.1815 29.1089 26.2347 29.2481 26.2586 29.3936C26.2825 29.5392 26.2768 29.6881 26.2417 29.8314C26.2066 29.9746 26.1429 30.1093 26.0544 30.2273C25.9659 30.3454 25.8544 30.4443 25.7267 30.5181C25.599 30.5919 25.4577 30.6391 25.3112 30.6569C25.1648 30.6747 25.0163 30.6627 24.8746 30.6216C24.7329 30.5805 24.601 30.5111 24.4869 30.4178C24.3727 30.3244 24.2786 30.2088 24.2102 30.0781C23.5212 28.9115 22.5399 27.9446 21.3632 27.2729C20.1865 26.6013 18.855 26.248 17.5 26.248C16.1451 26.248 14.8136 26.6013 13.6369 27.2729C12.4602 27.9446 11.4789 28.9115 10.7899 30.0781C10.7215 30.2088 10.6274 30.3244 10.5132 30.4178C10.399 30.5111 10.2671 30.5805 10.1255 30.6216C9.9838 30.6627 9.83528 30.6747 9.68885 30.6569C9.54241 30.6391 9.40108 30.5919 9.27337 30.5181C9.14566 30.4443 9.0342 30.3454 8.9457 30.2273C8.8572 30.1093 8.79348 29.9746 8.75839 29.8314C8.72329 29.6881 8.71754 29.5392 8.74148 29.3936C8.76543 29.2481 8.81856 29.1089 8.8977 28.9844C9.95809 27.1624 11.5749 25.7287 13.5106 24.8937C12.4214 24.0598 11.6209 22.9055 11.2216 21.5931C10.8224 20.2807 10.8444 18.8762 11.2847 17.577C11.7249 16.2778 12.5613 15.1492 13.6761 14.3498C14.791 13.5505 16.1283 13.1206 17.5 13.1206C18.8718 13.1206 20.2091 13.5505 21.324 14.3498C22.4388 15.1492 23.2751 16.2778 23.7154 17.577C24.1556 18.8762 24.1777 20.2807 23.7784 21.5931C23.3792 22.9055 22.5787 24.0598 21.4895 24.8937C23.4252 25.7287 25.042 27.1624 26.1024 28.9844ZM17.5 24.0625C18.3653 24.0625 19.2112 23.8059 19.9307 23.3252C20.6501 22.8444 21.2109 22.1612 21.542 21.3617C21.8732 20.5623 21.9598 19.6826 21.791 18.834C21.6222 17.9853 21.2055 17.2058 20.5936 16.5939C19.9818 15.982 19.2022 15.5654 18.3536 15.3966C17.5049 15.2277 16.6252 15.3144 15.8258 15.6455C15.0264 15.9767 14.3431 16.5374 13.8624 17.2569C13.3816 17.9763 13.125 18.8222 13.125 19.6875C13.125 20.8478 13.586 21.9606 14.4065 22.7811C15.2269 23.6016 16.3397 24.0625 17.5 24.0625ZM9.84379 16.4062C9.84379 16.1162 9.72856 15.838 9.52344 15.6328C9.31832 15.4277 9.04012 15.3125 8.75004 15.3125C8.13635 15.3124 7.53497 15.1403 7.01422 14.8156C6.49347 14.4909 6.07421 14.0266 5.80407 13.4756C5.53393 12.9246 5.42374 12.3088 5.48602 11.6983C5.54829 11.0878 5.78053 10.5069 6.15636 10.0218C6.53219 9.53663 7.03655 9.16661 7.61213 8.95373C8.18772 8.74085 8.81147 8.69366 9.41254 8.81751C10.0136 8.94136 10.5679 9.2313 11.0124 9.65438C11.457 10.0775 11.774 10.6167 11.9274 11.2109C11.9999 11.4919 12.1811 11.7326 12.4311 11.8801C12.6811 12.0275 12.9794 12.0696 13.2604 11.9971C13.5414 11.9245 13.7821 11.7434 13.9295 11.4934C14.077 11.2434 14.119 10.9451 14.0465 10.6641C13.8336 9.84007 13.4313 9.07716 12.8716 8.43602C12.3119 7.79488 11.6103 7.29322 10.8226 6.97094C10.035 6.64867 9.18294 6.51467 8.33436 6.57963C7.48579 6.64458 6.66408 6.90669 5.93463 7.34509C5.20518 7.78349 4.58811 8.38609 4.13253 9.10494C3.67695 9.82379 3.39543 10.639 3.31037 11.4858C3.22531 12.3326 3.33906 13.1876 3.64257 13.9827C3.94607 14.7778 4.43095 15.4911 5.05864 16.0658C3.57289 16.7104 2.28149 17.7322 1.31254 19.0299C1.22627 19.1448 1.16348 19.2756 1.12775 19.4147C1.09202 19.5539 1.08405 19.6988 1.1043 19.841C1.12455 19.9833 1.17262 20.1201 1.24577 20.2438C1.31891 20.3675 1.4157 20.4755 1.53061 20.5618C1.64552 20.6481 1.77629 20.7109 1.91546 20.7466C2.05464 20.7823 2.19949 20.7903 2.34174 20.7701C2.48399 20.7498 2.62087 20.7017 2.74454 20.6286C2.86822 20.5554 2.97627 20.4587 3.06254 20.3437C3.72178 19.4576 4.57987 18.7387 5.56772 18.2447C6.55558 17.7508 7.6456 17.4957 8.75004 17.5C9.04012 17.5 9.31832 17.3848 9.52344 17.1796C9.72856 16.9745 9.84379 16.6963 9.84379 16.4062Z"
                                fill="{{ Request::is('user*') ? 'white' : '#C0C0C0' }}" />
                        </svg>
                    </div>
                    <p class="ml-3 {{ Request::is('user*') ? 'text-primary' : '' }}">Users</p>
                </a>
            </li>
            <li>
                <a href="{{ route('aktivitas.index') }}">
                    <div class="{{ Request::is('aktivitas*') ? 'icon-active' : '' }}">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.375 29.1667V20.4167L16.0417 17.5L4.375 14.5833V5.83333L25.2292 14.5833H24.7917C21.9479 14.5833 19.5353 15.5862 17.554 17.5919C15.5726 19.5976 14.5824 22.0218 14.5833 24.8646L4.375 29.1667ZM24.7917 32.0833C22.7743 32.0833 21.0544 31.3721 19.6321 29.9498C18.2097 28.5274 17.499 26.8081 17.5 24.7917C17.5 22.7743 18.2112 21.0544 19.6335 19.6321C21.0559 18.2097 22.7753 17.499 24.7917 17.5C26.809 17.5 28.5289 18.2112 29.9513 19.6335C31.3736 21.0559 32.0843 22.7753 32.0833 24.7917C32.0833 26.809 31.3722 28.5289 29.9498 29.9512C28.5274 31.3736 26.8081 32.0843 24.7917 32.0833ZM27.1979 28.2187L28.2188 27.1979L25.5208 24.5V20.4167H24.0625V25.0833L27.1979 28.2187Z"
                                fill="{{ Request::is('aktivitas*') ? 'white' : '#C0C0C0' }}" />
                        </svg>
                    </div>
                    <p class="ml-3 {{ Request::is('aktivitas*') ? 'text-primary' : '' }}">Aktivitas</p>
                </a>
            </li>
            <li>
                <a href="{{ route('arsip.index') }}">
                    <div class="{{ Request::is('arsip*') ? 'icon-active' : '' }}">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.125 8.75001H30.625M13.125 17.5H30.625M13.125 26.25H24.7917M5.83333 10.2083C6.22011 10.2083 6.59104 10.0547 6.86453 9.7812C7.13802 9.50771 7.29167 9.13678 7.29167 8.75001C7.29167 8.36323 7.13802 7.9923 6.86453 7.71881C6.59104 7.44532 6.22011 7.29167 5.83333 7.29167C5.44656 7.29167 5.07563 7.44532 4.80214 7.71881C4.52865 7.9923 4.375 8.36323 4.375 8.75001C4.375 9.13678 4.52865 9.50771 4.80214 9.7812C5.07563 10.0547 5.44656 10.2083 5.83333 10.2083ZM5.83333 18.9583C6.22011 18.9583 6.59104 18.8047 6.86453 18.5312C7.13802 18.2577 7.29167 17.8868 7.29167 17.5C7.29167 17.1132 7.13802 16.7423 6.86453 16.4688C6.59104 16.1953 6.22011 16.0417 5.83333 16.0417C5.44656 16.0417 5.07563 16.1953 4.80214 16.4688C4.52865 16.7423 4.375 17.1132 4.375 17.5C4.375 17.8868 4.52865 18.2577 4.80214 18.5312C5.07563 18.8047 5.44656 18.9583 5.83333 18.9583ZM5.83333 27.7083C6.22011 27.7083 6.59104 27.5547 6.86453 27.2812C7.13802 27.0077 7.29167 26.6368 7.29167 26.25C7.29167 25.8632 7.13802 25.4923 6.86453 25.2188C6.59104 24.9453 6.22011 24.7917 5.83333 24.7917C5.44656 24.7917 5.07563 24.9453 4.80214 25.2188C4.52865 25.4923 4.375 25.8632 4.375 26.25C4.375 26.6368 4.52865 27.0077 4.80214 27.2812C5.07563 27.5547 5.44656 27.7083 5.83333 27.7083Z"
                                stroke="{{ Request::is('arsip*') ? 'white' : '#C0C0C0' }}" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <p class="ml-3 {{ Request::is('arsip*') ? 'text-primary' : '' }}">Arsip</p>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="{{ Request::is('meet*') ? 'icon-active' : '' }}">
                        <svg width="35" height="35" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M33 18.535C34.163 18.883 35 19 35 19V16H37C38.3261 16 39.5979 15.4732 40.5355 14.5355C41.4732 13.5979 42 12.3261 42 11C42 9.67392 41.4732 8.40215 40.5355 7.46447C39.5979 6.52678 38.3261 6 37 6H31.236C29.8473 6 28.5155 6.55165 27.5336 7.53359C26.5516 8.51553 26 9.84733 26 11.236C26 15.754 30.348 17.742 33 18.535ZM40 11C40 11.7956 39.6839 12.5587 39.1213 13.1213C38.5587 13.6839 37.7956 14 37 14H33V16.435C32.4514 16.2487 31.9158 16.0259 31.397 15.768C29.414 14.774 28 13.36 28 11.236C28 10.3778 28.3409 9.55467 28.9478 8.9478C29.5547 8.34093 30.3778 8 31.236 8H37C37.7956 8 38.5587 8.31607 39.1213 8.87868C39.6839 9.44129 40 10.2044 40 11ZM14.817 17.993C13.5065 17.9476 12.2664 17.3891 11.3639 16.4377C10.4615 15.4864 9.96903 14.2185 9.99278 12.9075C10.0165 11.5964 10.5546 10.3472 11.4909 9.4292C12.4272 8.51118 13.6867 7.99789 14.998 8H18.167C19.4488 8 20.6781 8.50919 21.5844 9.41555C22.4908 10.3219 23 11.5512 23 12.833C23 16.875 19.37 18.723 17 19.5C15.852 19.876 15 20 15 20V18L14.817 17.993ZM17 16.071L14.89 15.995C14.0971 15.9778 13.3433 15.647 12.7937 15.0753C12.2441 14.5035 11.9435 13.7372 11.9576 12.9442C11.9718 12.1512 12.2996 11.3962 12.8692 10.8444C13.4389 10.2925 14.204 9.98893 14.997 10H18.166C18.5381 9.99987 18.9066 10.073 19.2505 10.2154C19.5943 10.3577 19.9067 10.5663 20.1699 10.8294C20.4331 11.0925 20.6418 11.4048 20.7843 11.7486C20.9267 12.0924 21 12.4609 21 12.833C21 14.748 19.783 16.003 18.076 16.893C17.716 17.081 17.351 17.241 17 17.377V16.071ZM28 24C28 26.21 26.21 28 24 28C21.79 28 20 26.21 20 24C20 21.79 21.79 20 24 20C26.21 20 28 21.79 28 24ZM26 24C26 24.5304 25.7893 25.0391 25.4142 25.4142C25.0391 25.7893 24.5304 26 24 26C23.4696 26 22.9609 25.7893 22.5858 25.4142C22.2107 25.0391 22 24.5304 22 24C22 23.4696 22.2107 22.9609 22.5858 22.5858C22.9609 22.2107 23.4696 22 24 22C24.5304 22 25.0391 22.2107 25.4142 22.5858C25.7893 22.9609 26 23.4696 26 24ZM19 26C19 28.21 17.21 30 15 30C12.79 30 11 28.21 11 26C11 23.79 12.79 22 15 22C17.21 22 19 23.79 19 26ZM17 26C17 26.5304 16.7893 27.0391 16.4142 27.4142C16.0391 27.7893 15.5304 28 15 28C14.4696 28 13.9609 27.7893 13.5858 27.4142C13.2107 27.0391 13 26.5304 13 26C13 25.4696 13.2107 24.9609 13.5858 24.5858C13.9609 24.2107 14.4696 24 15 24C15.5304 24 16.0391 24.2107 16.4142 24.5858C16.7893 24.9609 17 25.4696 17 26ZM6 36.545C6 33.523 11.996 32 15 32C15.585 32 16.284 32.058 17.03 32.173C18.37 31.19 20.827 30 24 30C27.172 30 29.629 31.19 30.971 32.173C31.6421 32.0648 32.3203 32.007 33 32C36.004 32 42 33.523 42 36.545V42H6V36.545ZM21.652 36.023C22 36.347 22 36.516 22 36.545V40H8V36.545C8 36.515 8 36.347 8.348 36.023C8.711 35.684 9.31 35.323 10.124 34.993C11.756 34.333 13.75 34 15 34C16.25 34 18.244 34.333 19.876 34.993C20.69 35.323 21.289 35.684 21.652 36.023ZM28.142 32.856C26.8348 32.2892 25.4248 31.9978 24 32C22.344 32 20.936 32.386 19.859 32.856C22.074 33.6 24 34.832 24 36.546C24 34.832 25.926 33.601 28.142 32.856ZM40 36.546C40 36.516 40 36.347 39.652 36.023C39.289 35.684 38.69 35.323 37.876 34.993C36.244 34.333 34.25 34 33 34C31.75 34 29.756 34.333 28.124 34.993C27.31 35.323 26.711 35.684 26.348 36.023C26 36.347 26 36.516 26 36.545V40H40V36.545V36.546ZM33 30C35.21 30 37 28.21 37 26C37 23.79 35.21 22 33 22C30.79 22 29 23.79 29 26C29 28.21 30.79 30 33 30ZM33 28C33.5304 28 34.0391 27.7893 34.4142 27.4142C34.7893 27.0391 35 26.5304 35 26C35 25.4696 34.7893 24.9609 34.4142 24.5858C34.0391 24.2107 33.5304 24 33 24C32.4696 24 31.9609 24.2107 31.5858 24.5858C31.2107 24.9609 31 25.4696 31 26C31 26.5304 31.2107 27.0391 31.5858 27.4142C31.9609 27.7893 32.4696 28 33 28Z" fill="{{ Request::is('meet*') ? 'white' : '#C0C0C0' }}"/>
                        </svg>                            
                    </div>
                    <p class="ml-3 {{ Request::is('meet*') ? 'text-primary' : '' }}">Pertemuan</p>
                </a>
            </li>
        </ul>
    </div>
</aside>

{{-- responsive --}}
<aside class="w-60 shadow-sm h-screen fixed -left-full transition ease-in-out top-0 z-50 bg-white mr-5" id="aside-responsive">
    <div class="h-16 flex items-center px-3 cursor-pointer" id="close-icon">
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27.7084 7.29166L7.29169 27.7083" stroke="black" stroke-width="2" stroke-linecap="round"/>
            <path d="M7.29169 7.29166L27.7084 27.7083" stroke="black" stroke-width="2" stroke-linecap="round"/>
        </svg>            
    </div>
    {{-- list --}}
    <div>
        <div class="">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard*') ? 'icon-active-responsive' : 'px-2' }}">
                        <div class="">
                            <svg width="25" height="25" viewBox="0 0 70 70" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.1708 7.55417C32.9615 6.88464 33.964 6.51721 35 6.51721C36.036 6.51721 37.0385 6.88464 37.8292 7.55417L59.7042 26.1129C60.1886 26.5236 60.5777 27.0348 60.8447 27.611C61.1116 28.1872 61.2499 28.8146 61.25 29.4496V56.875C61.25 58.0353 60.7891 59.1481 59.9686 59.9686C59.1481 60.7891 58.0353 61.25 56.875 61.25H40.1042C39.524 61.25 38.9676 61.0195 38.5574 60.6093C38.1471 60.1991 37.9167 59.6427 37.9167 59.0625V40.8333H32.0833V59.0625C32.0833 59.6427 31.8529 60.1991 31.4426 60.6093C31.0324 61.0195 30.476 61.25 29.8958 61.25H13.125C11.9647 61.25 10.8519 60.7891 10.0314 59.9686C9.21094 59.1481 8.75 58.0353 8.75 56.875V29.4496C8.75 28.1663 9.31583 26.9442 10.2958 26.1129L32.1708 7.55417ZM35 10.8908L13.125 29.4496V56.875H27.7083V38.6458C27.7083 38.0657 27.9388 37.5093 28.349 37.099C28.7593 36.6888 29.3157 36.4583 29.8958 36.4583H40.1042C40.6843 36.4583 41.2407 36.6888 41.651 37.099C42.0612 37.5093 42.2917 38.0657 42.2917 38.6458V56.875H56.875V29.4496L35 10.8908Z"
                                    fill="{{ Request::is('dashboard*') ? 'white' : '#C0C0C0' }}" />
                            </svg>
                        </div>
                        <p class="ml-3 text-base {{ Request::is('dashboard*') ? 'text-white' : '' }}">Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kelas.index') }}" class="{{ Request::is('kelas*') ? 'icon-active-responsive' : 'px-2' }}">
                        <div>
                            <svg width="25" height="25" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.75 8.75C3.75 8.41848 3.8817 8.10054 4.11612 7.86612C4.35054 7.6317 4.66848 7.5 5 7.5H27.5C27.8315 7.5 28.1495 7.6317 28.3839 7.86612C28.6183 8.10054 28.75 8.41848 28.75 8.75C28.75 9.08152 28.6183 9.39946 28.3839 9.63388C28.1495 9.8683 27.8315 10 27.5 10H5C4.66848 10 4.35054 9.8683 4.11612 9.63388C3.8817 9.39946 3.75 9.08152 3.75 8.75ZM3.75 26.25C3.75 25.9185 3.8817 25.6005 4.11612 25.3661C4.35054 25.1317 4.66848 25 5 25H25C25.3315 25 25.6495 25.1317 25.8839 25.3661C26.1183 25.6005 26.25 25.9185 26.25 26.25C26.25 26.5815 26.1183 26.8995 25.8839 27.1339C25.6495 27.3683 25.3315 27.5 25 27.5H5C4.66848 27.5 4.35054 27.3683 4.11612 27.1339C3.8817 26.8995 3.75 26.5815 3.75 26.25ZM5 16.25C4.66848 16.25 4.35054 16.3817 4.11612 16.6161C3.8817 16.8505 3.75 17.1685 3.75 17.5C3.75 17.8315 3.8817 18.1495 4.11612 18.3839C4.35054 18.6183 4.66848 18.75 5 18.75H30C30.3315 18.75 30.6495 18.6183 30.8839 18.3839C31.1183 18.1495 31.25 17.8315 31.25 17.5C31.25 17.1685 31.1183 16.8505 30.8839 16.6161C30.6495 16.3817 30.3315 16.25 30 16.25H5Z"
                                    fill="{{ Request::is('kelas*') ? 'white' : '#C0C0C0' }}" />
                            </svg>
                        </div>
                        <p class="ml-3 text-base {{ Request::is('kelas*') ? 'text-white' : '' }}">Kelas</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}" class="{{ Request::is('user*') ? 'icon-active-responsive' : 'px-2' }}">
                        <div>
                            <svg width="25" height="25" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M33.4688 20.5625C33.3539 20.6487 33.2231 20.7114 33.084 20.747C32.9449 20.7827 32.8001 20.7906 32.6579 20.7703C32.5157 20.7499 32.3789 20.7018 32.2553 20.6286C32.1317 20.5555 32.0237 20.4587 31.9375 20.3437C31.2783 19.4576 30.4202 18.7387 29.4324 18.2447C28.4445 17.7508 27.3545 17.4957 26.25 17.5C26.035 17.5 25.8247 17.4365 25.6454 17.3176C25.4662 17.1987 25.326 17.0296 25.2424 16.8314C25.1856 16.6969 25.1564 16.5523 25.1564 16.4062C25.1564 16.2602 25.1856 16.1156 25.2424 15.981C25.326 15.7829 25.4662 15.6138 25.6454 15.4949C25.8247 15.3759 26.035 15.3125 26.25 15.3125C26.8637 15.3124 27.4651 15.1403 27.9859 14.8156C28.5066 14.4909 28.9259 14.0266 29.196 13.4756C29.4662 12.9246 29.5763 12.3088 29.5141 11.6983C29.4518 11.0878 29.2196 10.5069 28.8437 10.0218C28.4679 9.53663 27.9635 9.16661 27.388 8.95373C26.8124 8.74085 26.1886 8.69366 25.5876 8.81751C24.9865 8.94136 24.4322 9.2313 23.9877 9.65438C23.5431 10.0775 23.2261 10.6167 23.0727 11.2109C23.0368 11.3501 22.9738 11.4808 22.8874 11.5956C22.801 11.7104 22.6928 11.8071 22.569 11.8801C22.4452 11.9531 22.3083 12.001 22.166 12.021C22.0237 12.0411 21.8788 12.033 21.7397 11.9971C21.6005 11.9612 21.4698 11.8982 21.355 11.8118C21.2402 11.7253 21.1436 11.6172 21.0706 11.4934C20.9976 11.3696 20.9496 11.2326 20.9296 11.0904C20.9095 10.9481 20.9177 10.8032 20.9536 10.6641C21.1665 9.84007 21.5688 9.07716 22.1285 8.43602C22.6882 7.79488 23.3898 7.29322 24.1775 6.97094C24.9651 6.64867 25.8172 6.51467 26.6657 6.57963C27.5143 6.64458 28.336 6.90669 29.0655 7.34509C29.7949 7.78349 30.412 8.38609 30.8676 9.10494C31.3231 9.82379 31.6047 10.639 31.6897 11.4858C31.7748 12.3326 31.661 13.1876 31.3575 13.9827C31.054 14.7778 30.5691 15.4911 29.9415 16.0658C31.4287 16.7098 32.7216 17.7316 33.6916 19.0299C33.7778 19.1451 33.8404 19.2761 33.8759 19.4156C33.9113 19.555 33.9189 19.7001 33.8982 19.8424C33.8775 19.9848 33.8289 20.1217 33.7552 20.2452C33.6815 20.3688 33.5842 20.4766 33.4688 20.5625ZM26.1024 28.9844C26.1815 29.1089 26.2347 29.2481 26.2586 29.3936C26.2825 29.5392 26.2768 29.6881 26.2417 29.8314C26.2066 29.9746 26.1429 30.1093 26.0544 30.2273C25.9659 30.3454 25.8544 30.4443 25.7267 30.5181C25.599 30.5919 25.4577 30.6391 25.3112 30.6569C25.1648 30.6747 25.0163 30.6627 24.8746 30.6216C24.7329 30.5805 24.601 30.5111 24.4869 30.4178C24.3727 30.3244 24.2786 30.2088 24.2102 30.0781C23.5212 28.9115 22.5399 27.9446 21.3632 27.2729C20.1865 26.6013 18.855 26.248 17.5 26.248C16.1451 26.248 14.8136 26.6013 13.6369 27.2729C12.4602 27.9446 11.4789 28.9115 10.7899 30.0781C10.7215 30.2088 10.6274 30.3244 10.5132 30.4178C10.399 30.5111 10.2671 30.5805 10.1255 30.6216C9.9838 30.6627 9.83528 30.6747 9.68885 30.6569C9.54241 30.6391 9.40108 30.5919 9.27337 30.5181C9.14566 30.4443 9.0342 30.3454 8.9457 30.2273C8.8572 30.1093 8.79348 29.9746 8.75839 29.8314C8.72329 29.6881 8.71754 29.5392 8.74148 29.3936C8.76543 29.2481 8.81856 29.1089 8.8977 28.9844C9.95809 27.1624 11.5749 25.7287 13.5106 24.8937C12.4214 24.0598 11.6209 22.9055 11.2216 21.5931C10.8224 20.2807 10.8444 18.8762 11.2847 17.577C11.7249 16.2778 12.5613 15.1492 13.6761 14.3498C14.791 13.5505 16.1283 13.1206 17.5 13.1206C18.8718 13.1206 20.2091 13.5505 21.324 14.3498C22.4388 15.1492 23.2751 16.2778 23.7154 17.577C24.1556 18.8762 24.1777 20.2807 23.7784 21.5931C23.3792 22.9055 22.5787 24.0598 21.4895 24.8937C23.4252 25.7287 25.042 27.1624 26.1024 28.9844ZM17.5 24.0625C18.3653 24.0625 19.2112 23.8059 19.9307 23.3252C20.6501 22.8444 21.2109 22.1612 21.542 21.3617C21.8732 20.5623 21.9598 19.6826 21.791 18.834C21.6222 17.9853 21.2055 17.2058 20.5936 16.5939C19.9818 15.982 19.2022 15.5654 18.3536 15.3966C17.5049 15.2277 16.6252 15.3144 15.8258 15.6455C15.0264 15.9767 14.3431 16.5374 13.8624 17.2569C13.3816 17.9763 13.125 18.8222 13.125 19.6875C13.125 20.8478 13.586 21.9606 14.4065 22.7811C15.2269 23.6016 16.3397 24.0625 17.5 24.0625ZM9.84379 16.4062C9.84379 16.1162 9.72856 15.838 9.52344 15.6328C9.31832 15.4277 9.04012 15.3125 8.75004 15.3125C8.13635 15.3124 7.53497 15.1403 7.01422 14.8156C6.49347 14.4909 6.07421 14.0266 5.80407 13.4756C5.53393 12.9246 5.42374 12.3088 5.48602 11.6983C5.54829 11.0878 5.78053 10.5069 6.15636 10.0218C6.53219 9.53663 7.03655 9.16661 7.61213 8.95373C8.18772 8.74085 8.81147 8.69366 9.41254 8.81751C10.0136 8.94136 10.5679 9.2313 11.0124 9.65438C11.457 10.0775 11.774 10.6167 11.9274 11.2109C11.9999 11.4919 12.1811 11.7326 12.4311 11.8801C12.6811 12.0275 12.9794 12.0696 13.2604 11.9971C13.5414 11.9245 13.7821 11.7434 13.9295 11.4934C14.077 11.2434 14.119 10.9451 14.0465 10.6641C13.8336 9.84007 13.4313 9.07716 12.8716 8.43602C12.3119 7.79488 11.6103 7.29322 10.8226 6.97094C10.035 6.64867 9.18294 6.51467 8.33436 6.57963C7.48579 6.64458 6.66408 6.90669 5.93463 7.34509C5.20518 7.78349 4.58811 8.38609 4.13253 9.10494C3.67695 9.82379 3.39543 10.639 3.31037 11.4858C3.22531 12.3326 3.33906 13.1876 3.64257 13.9827C3.94607 14.7778 4.43095 15.4911 5.05864 16.0658C3.57289 16.7104 2.28149 17.7322 1.31254 19.0299C1.22627 19.1448 1.16348 19.2756 1.12775 19.4147C1.09202 19.5539 1.08405 19.6988 1.1043 19.841C1.12455 19.9833 1.17262 20.1201 1.24577 20.2438C1.31891 20.3675 1.4157 20.4755 1.53061 20.5618C1.64552 20.6481 1.77629 20.7109 1.91546 20.7466C2.05464 20.7823 2.19949 20.7903 2.34174 20.7701C2.48399 20.7498 2.62087 20.7017 2.74454 20.6286C2.86822 20.5554 2.97627 20.4587 3.06254 20.3437C3.72178 19.4576 4.57987 18.7387 5.56772 18.2447C6.55558 17.7508 7.6456 17.4957 8.75004 17.5C9.04012 17.5 9.31832 17.3848 9.52344 17.1796C9.72856 16.9745 9.84379 16.6963 9.84379 16.4062Z"
                                    fill="{{ Request::is('user*') ? 'white' : '#C0C0C0' }}" />
                            </svg>
                        </div>
                        <p class="ml-3 text-base {{ Request::is('user*') ? 'text-white' : '' }}">Pengguna</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('aktivitas.index') }}" class="{{ Request::is('aktivitas*') ? 'icon-active-responsive' : 'px-2' }}">
                        <div>
                            <svg width="25" height="25" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.375 29.1667V20.4167L16.0417 17.5L4.375 14.5833V5.83333L25.2292 14.5833H24.7917C21.9479 14.5833 19.5353 15.5862 17.554 17.5919C15.5726 19.5976 14.5824 22.0218 14.5833 24.8646L4.375 29.1667ZM24.7917 32.0833C22.7743 32.0833 21.0544 31.3721 19.6321 29.9498C18.2097 28.5274 17.499 26.8081 17.5 24.7917C17.5 22.7743 18.2112 21.0544 19.6335 19.6321C21.0559 18.2097 22.7753 17.499 24.7917 17.5C26.809 17.5 28.5289 18.2112 29.9513 19.6335C31.3736 21.0559 32.0843 22.7753 32.0833 24.7917C32.0833 26.809 31.3722 28.5289 29.9498 29.9512C28.5274 31.3736 26.8081 32.0843 24.7917 32.0833ZM27.1979 28.2187L28.2188 27.1979L25.5208 24.5V20.4167H24.0625V25.0833L27.1979 28.2187Z"
                                    fill="{{ Request::is('aktivitas*') ? 'white' : '#C0C0C0' }}" />
                            </svg>
                        </div>
                        <p class="ml-3 text-base {{ Request::is('aktivitas*') ? 'text-white' : '' }}">Aktivitas</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('arsip.index') }}" class="{{ Request::is('arsip*') ? 'icon-active-responsive' : 'px-2' }}">
                        <div>
                            <svg width="25" height="25" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.125 8.75001H30.625M13.125 17.5H30.625M13.125 26.25H24.7917M5.83333 10.2083C6.22011 10.2083 6.59104 10.0547 6.86453 9.7812C7.13802 9.50771 7.29167 9.13678 7.29167 8.75001C7.29167 8.36323 7.13802 7.9923 6.86453 7.71881C6.59104 7.44532 6.22011 7.29167 5.83333 7.29167C5.44656 7.29167 5.07563 7.44532 4.80214 7.71881C4.52865 7.9923 4.375 8.36323 4.375 8.75001C4.375 9.13678 4.52865 9.50771 4.80214 9.7812C5.07563 10.0547 5.44656 10.2083 5.83333 10.2083ZM5.83333 18.9583C6.22011 18.9583 6.59104 18.8047 6.86453 18.5312C7.13802 18.2577 7.29167 17.8868 7.29167 17.5C7.29167 17.1132 7.13802 16.7423 6.86453 16.4688C6.59104 16.1953 6.22011 16.0417 5.83333 16.0417C5.44656 16.0417 5.07563 16.1953 4.80214 16.4688C4.52865 16.7423 4.375 17.1132 4.375 17.5C4.375 17.8868 4.52865 18.2577 4.80214 18.5312C5.07563 18.8047 5.44656 18.9583 5.83333 18.9583ZM5.83333 27.7083C6.22011 27.7083 6.59104 27.5547 6.86453 27.2812C7.13802 27.0077 7.29167 26.6368 7.29167 26.25C7.29167 25.8632 7.13802 25.4923 6.86453 25.2188C6.59104 24.9453 6.22011 24.7917 5.83333 24.7917C5.44656 24.7917 5.07563 24.9453 4.80214 25.2188C4.52865 25.4923 4.375 25.8632 4.375 26.25C4.375 26.6368 4.52865 27.0077 4.80214 27.2812C5.07563 27.5547 5.44656 27.7083 5.83333 27.7083Z"
                                    stroke="{{ Request::is('arsip*') ? 'white' : '#C0C0C0' }}" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <p class="ml-3 text-base {{ Request::is('arsip*') ? 'text-white' : '' }}">Arsip</p>
                    </a>
                </li>
                <li>
                    <a href="" class="{{ Request::is('meet*') ? 'icon-active-responsive' : 'px-2' }}">
                        <div>
                            <svg width="25" height="25" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M33 18.535C34.163 18.883 35 19 35 19V16H37C38.3261 16 39.5979 15.4732 40.5355 14.5355C41.4732 13.5979 42 12.3261 42 11C42 9.67392 41.4732 8.40215 40.5355 7.46447C39.5979 6.52678 38.3261 6 37 6H31.236C29.8473 6 28.5155 6.55165 27.5336 7.53359C26.5516 8.51553 26 9.84733 26 11.236C26 15.754 30.348 17.742 33 18.535ZM40 11C40 11.7956 39.6839 12.5587 39.1213 13.1213C38.5587 13.6839 37.7956 14 37 14H33V16.435C32.4514 16.2487 31.9158 16.0259 31.397 15.768C29.414 14.774 28 13.36 28 11.236C28 10.3778 28.3409 9.55467 28.9478 8.9478C29.5547 8.34093 30.3778 8 31.236 8H37C37.7956 8 38.5587 8.31607 39.1213 8.87868C39.6839 9.44129 40 10.2044 40 11ZM14.817 17.993C13.5065 17.9476 12.2664 17.3891 11.3639 16.4377C10.4615 15.4864 9.96903 14.2185 9.99278 12.9075C10.0165 11.5964 10.5546 10.3472 11.4909 9.4292C12.4272 8.51118 13.6867 7.99789 14.998 8H18.167C19.4488 8 20.6781 8.50919 21.5844 9.41555C22.4908 10.3219 23 11.5512 23 12.833C23 16.875 19.37 18.723 17 19.5C15.852 19.876 15 20 15 20V18L14.817 17.993ZM17 16.071L14.89 15.995C14.0971 15.9778 13.3433 15.647 12.7937 15.0753C12.2441 14.5035 11.9435 13.7372 11.9576 12.9442C11.9718 12.1512 12.2996 11.3962 12.8692 10.8444C13.4389 10.2925 14.204 9.98893 14.997 10H18.166C18.5381 9.99987 18.9066 10.073 19.2505 10.2154C19.5943 10.3577 19.9067 10.5663 20.1699 10.8294C20.4331 11.0925 20.6418 11.4048 20.7843 11.7486C20.9267 12.0924 21 12.4609 21 12.833C21 14.748 19.783 16.003 18.076 16.893C17.716 17.081 17.351 17.241 17 17.377V16.071ZM28 24C28 26.21 26.21 28 24 28C21.79 28 20 26.21 20 24C20 21.79 21.79 20 24 20C26.21 20 28 21.79 28 24ZM26 24C26 24.5304 25.7893 25.0391 25.4142 25.4142C25.0391 25.7893 24.5304 26 24 26C23.4696 26 22.9609 25.7893 22.5858 25.4142C22.2107 25.0391 22 24.5304 22 24C22 23.4696 22.2107 22.9609 22.5858 22.5858C22.9609 22.2107 23.4696 22 24 22C24.5304 22 25.0391 22.2107 25.4142 22.5858C25.7893 22.9609 26 23.4696 26 24ZM19 26C19 28.21 17.21 30 15 30C12.79 30 11 28.21 11 26C11 23.79 12.79 22 15 22C17.21 22 19 23.79 19 26ZM17 26C17 26.5304 16.7893 27.0391 16.4142 27.4142C16.0391 27.7893 15.5304 28 15 28C14.4696 28 13.9609 27.7893 13.5858 27.4142C13.2107 27.0391 13 26.5304 13 26C13 25.4696 13.2107 24.9609 13.5858 24.5858C13.9609 24.2107 14.4696 24 15 24C15.5304 24 16.0391 24.2107 16.4142 24.5858C16.7893 24.9609 17 25.4696 17 26ZM6 36.545C6 33.523 11.996 32 15 32C15.585 32 16.284 32.058 17.03 32.173C18.37 31.19 20.827 30 24 30C27.172 30 29.629 31.19 30.971 32.173C31.6421 32.0648 32.3203 32.007 33 32C36.004 32 42 33.523 42 36.545V42H6V36.545ZM21.652 36.023C22 36.347 22 36.516 22 36.545V40H8V36.545C8 36.515 8 36.347 8.348 36.023C8.711 35.684 9.31 35.323 10.124 34.993C11.756 34.333 13.75 34 15 34C16.25 34 18.244 34.333 19.876 34.993C20.69 35.323 21.289 35.684 21.652 36.023ZM28.142 32.856C26.8348 32.2892 25.4248 31.9978 24 32C22.344 32 20.936 32.386 19.859 32.856C22.074 33.6 24 34.832 24 36.546C24 34.832 25.926 33.601 28.142 32.856ZM40 36.546C40 36.516 40 36.347 39.652 36.023C39.289 35.684 38.69 35.323 37.876 34.993C36.244 34.333 34.25 34 33 34C31.75 34 29.756 34.333 28.124 34.993C27.31 35.323 26.711 35.684 26.348 36.023C26 36.347 26 36.516 26 36.545V40H40V36.545V36.546ZM33 30C35.21 30 37 28.21 37 26C37 23.79 35.21 22 33 22C30.79 22 29 23.79 29 26C29 28.21 30.79 30 33 30ZM33 28C33.5304 28 34.0391 27.7893 34.4142 27.4142C34.7893 27.0391 35 26.5304 35 26C35 25.4696 34.7893 24.9609 34.4142 24.5858C34.0391 24.2107 33.5304 24 33 24C32.4696 24 31.9609 24.2107 31.5858 24.5858C31.2107 24.9609 31 25.4696 31 26C31 26.5304 31.2107 27.0391 31.5858 27.4142C31.9609 27.7893 32.4696 28 33 28Z" fill="{{ Request::is('meet*') ? 'white' : '#C0C0C0' }}"/>
                            </svg>
                        </div>
                        <p class="ml-3 text-base {{ Request::is('meet*') ? 'text-white' : '' }}">Pertemuan</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>