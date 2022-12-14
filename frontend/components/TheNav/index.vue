<template>
  <div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
      <div class="navbar navbar-light">
        <div class="container-xl">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <NuxtLink class="nav-link" to="/admin">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                  </svg>
                </span>
                <span class="nav-link-title"> Trang chủ </span>
              </NuxtLink>
            </li>
            <li class="nav-item">
              <NuxtLink class="nav-link" to="/contracts">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline
                      points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                    ></polyline>
                    <line x1="12" y1="12" x2="20" y2="7.5"></line>
                    <line x1="12" y1="12" x2="12" y2="21"></line>
                    <line x1="12" y1="12" x2="4" y2="7.5"></line>
                    <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
                  </svg>
                </span>
                <span class="nav-link-title"> Hợp đồng </span>
              </NuxtLink>
            </li>
            <li class="nav-item">
              <NuxtLink class="nav-link" to="/customers">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="currentColor"
                    class="icon"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"
                    ></path>
                    <path
                      fill-rule="evenodd"
                      d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"
                    ></path>
                  </svg>
                </span>
                <span class="nav-link-title"> Khách hàng </span>
              </NuxtLink>
            </li>
            <li class="nav-item">
              <NuxtLink class="nav-link" to="/hostings">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline points="9 11 12 14 20 6"></polyline>
                    <path
                      d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"
                    ></path>
                  </svg>
                </span>
                <span class="nav-link-title"> Hosting </span>
              </NuxtLink>
            </li>
            <li class="nav-item">
              <NuxtLink class="nav-link" to="/designs">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                      d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                    ></path>
                  </svg>
                </span>
                <span class="nav-link-title"> Thiết kế </span>
              </NuxtLink>
            </li>
            <li class="nav-item">
              <NuxtLink class="nav-link" to="/domains">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="4" y="4" width="6" height="5" rx="2"></rect>
                    <rect x="4" y="13" width="6" height="7" rx="2"></rect>
                    <rect x="14" y="4" width="6" height="7" rx="2"></rect>
                    <rect x="14" y="15" width="6" height="5" rx="2"></rect>
                  </svg>
                </span>
                <span class="nav-link-title"> Tên Miền </span>
              </NuxtLink>
            </li>
            <li class="nav-item dropdown">
              <NuxtLink
                class="nav-link dropdown-toggle"
                to="/help"
                data-bs-toggle="dropdown"
                data-bs-auto-close="outside"
                role="button"
                aria-expanded="false"
              >
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="4"></circle>
                    <circle cx="12" cy="12" r="9"></circle>
                    <line x1="15" y1="15" x2="18.35" y2="18.35"></line>
                    <line x1="9" y1="15" x2="5.65" y2="18.35"></line>
                    <line x1="5.65" y1="5.65" x2="9" y2="9"></line>
                    <line x1="18.35" y1="5.65" x2="15" y2="9"></line>
                  </svg>
                </span>
                <span class="nav-link-title"> Supports </span>
              </NuxtLink>
              <div class="dropdown-menu">
                <NuxtLink class="dropdown-item" to="#">
                  Documentation
                </NuxtLink>
                <NuxtLink class="dropdown-item" to="#"> Changelog </NuxtLink>
                <NuxtLink
                  class="dropdown-item text-pink"
                  href="#"
                  target="_blank"
                  rel="noopener"
                >
                  <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-inline me-1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                      d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"
                    ></path>
                  </svg>
                  Send email
                </NuxtLink>
              </div>
            </li>
          </ul>
          <div
            class="
              my-2 my-md-0
              flex-grow-1 flex-md-grow-0
              order-first order-md-last
            "
          >
            <form action="#" method="get" style="position: relative; top: 1px">
              <div class="input-icon">
                <span class="input-icon-addon">
                  <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="10" cy="10" r="7"></circle>
                    <line x1="21" y1="21" x2="15" y2="15"></line>
                  </svg>
                </span>
                <input
                  type="text"
                  value=""
                  class="form-control"
                  placeholder="Tìm kiếm…"
                  aria-label="Tìm kiếm in website"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>