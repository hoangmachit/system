<template>
  <header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-xl">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-menu"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <h1
        class="
          navbar-brand navbar-brand-autodark
          d-none-navbar-horizontal
          pe-0 pe-md-3
        "
      >
        <a href=".">
          <img
            src="https://user.haweb.vn/public/assets/static/logo.svg"
            width="110"
            height="32"
            alt="Tabler"
            class="navbar-brand-image"
          />
        </a>
      </h1>

      <div class="navbar-nav flex-row order-md-last">
        <div class="nav-item d-none d-md-flex me-3">
          <div class="btn-list">
            <a
              href="https://user.haweb.vn/dashboard/language/en"
              class="btn-language"
              rel="noreferrer"
              title="English"
            >
              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->

              <img
                width="24px"
                src="https://user.haweb.vn/public/assets/img/flags/gb.svg"
                alt=""
              />
            </a>

            <a
              href="https://user.haweb.vn/dashboard/language/vi"
              class="btn-language"
              rel="noreferrer"
              title="Vietnamese"
            >
              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->

              <img
                width="24px"
                src="https://user.haweb.vn/public/assets/img/flags/vn.svg"
                alt=""
              />
            </a>
          </div>
        </div>

        <div class="d-none d-md-flex">
          <a
            href="?theme=dark"
            class="nav-link px-0 hide-theme-dark"
            title=""
            data-bs-toggle="tooltip"
            data-bs-placement="bottom"
            data-bs-original-title="Enable dark mode"
          >
            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->

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
                d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"
              ></path>
            </svg>
          </a>

          <a
            href="?theme=light"
            class="nav-link px-0 hide-theme-light"
            title=""
            data-bs-toggle="tooltip"
            data-bs-placement="bottom"
            data-bs-original-title="Enable light mode"
          >
            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->

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
              <path
                d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"
              ></path>
            </svg>
          </a>

          <div class="nav-item dropdown d-none d-md-flex me-3">
            <a
              href="#"
              class="nav-link px-0"
              data-bs-toggle="dropdown"
              tabindex="-1"
              aria-label="Show notifications"
            >
              <!-- Download SVG icon from http://tabler-icons.io/i/bell -->

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
                  d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"
                ></path>
                <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
              </svg>

              <span class="badge bg-red"></span>
            </a>

            <div
              class="
                dropdown-menu
                dropdown-menu-arrow
                dropdown-menu-end
                dropdown-menu-card
              "
            >
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Last updates</h3>
                </div>

                <div class="list-group list-group-flush list-group-hoverable">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span
                          class="status-dot status-dot-animated bg-red d-block"
                        ></span>
                      </div>

                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 1</a>

                        <div class="d-block text-muted text-truncate mt-n1">
                          Change deprecated html tags to text decoration classes
                          (#29604)
                        </div>
                      </div>

                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->

                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="icon text-muted"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          >
                            <path
                              stroke="none"
                              d="M0 0h24v24H0z"
                              fill="none"
                            ></path>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                            ></path>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="status-dot d-block"></span>
                      </div>

                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 2</a>

                        <div class="d-block text-muted text-truncate mt-n1">
                          justify-content:between ⇒
                          justify-content:space-between (#29734)
                        </div>
                      </div>

                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions show">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->

                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="icon text-yellow"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          >
                            <path
                              stroke="none"
                              d="M0 0h24v24H0z"
                              fill="none"
                            ></path>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                            ></path>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="status-dot d-block"></span>
                      </div>

                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 3</a>

                        <div class="d-block text-muted text-truncate mt-n1">
                          Update change-version.js (#29736)
                        </div>
                      </div>

                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->

                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="icon text-muted"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          >
                            <path
                              stroke="none"
                              d="M0 0h24v24H0z"
                              fill="none"
                            ></path>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                            ></path>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="nav-item dropdown">
          <a
            href="#"
            class="nav-link d-flex lh-1 text-reset p-0"
            data-bs-toggle="dropdown"
            aria-label="Open user menu"
          >
            <span
              class="avatar avatar-sm"
              style="
                background-image: url('https://graph.facebook.com/v3.3/3350168338642066/picture?type=normal');
              "
            ></span>

            <div class="d-none d-xl-block ps-2">
              <div>Hoàng Anh Adwords</div>

              <div class="mt-1 small text-muted">Member</div>
            </div>
          </a>

          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a
              href="#"
              class="dropdown-item"
              data-bs-toggle="modal"
              data-bs-target="#modal-account"
              >Profile &amp; account</a
            >

            <a
              href="https://user.haweb.vn/logout"
              class="dropdown-item"
              onclick="event.preventDefault();

                                  document.getElementById('logout-form').submit();"
              >Logout</a
            >

            <form
              id="logout-form"
              action="https://user.haweb.vn/logout"
              method="POST"
              class="d-none"
            >
              <input
                type="hidden"
                name="_token"
                value="X5z7mg8ARLUEUGg7JfDqSSH0U5iq7QoL3x2OMTMl"
              />
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>
