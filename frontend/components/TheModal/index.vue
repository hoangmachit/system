<template>
  <div
    class="modal modal-blur fade"
    id="modal-account"
    tabindex="-1"
    role="dialog"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg" role="document">
      <form action="#" method="POST" role="form">
        <input
          type="hidden"
          name="_token"
          value="X5z7mg8ARLUEUGg7JfDqSSH0U5iq7QoL3x2OMTMl"
        />
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">My Account</h5>

            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Name</label>

              <input
                type="text"
                class="form-control"
                name="name"
                placeholder="Name"
                value="Hoàng Anh Adwords"
                required=""
              />
            </div>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <label class="form-label">Avatar</label>

                <div class="col mb-2">
                  <div class="row">
                    <div class="col-lg-8">
                      <div
                        class="progress progress_file_img"
                        style="display: none"
                      >
                        <div
                          class="
                            progress-bar
                            progress-bar-striped
                            progress-bar-animated
                          "
                          role="progressbar"
                          aria-valuenow="0"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>

                      <div
                        id="upload-zone_file_img"
                        class="media py-5 border-ec-dashed mb-2 rounded"
                      >
                        <div class="media-body">
                          <i
                            class="
                              fa fa-cloud-upload fa-3x
                              text-ec-lightGray
                              mx-3
                              align-middle
                            "
                            aria-hidden="true"
                          ></i>

                          <input
                            type="file"
                            id="file_img"
                            name="image"
                            multiple=""
                            accept="image/*"
                            style="display: none"
                            class="form-control-file"
                          />

                          <a
                            class="btn btn-ec-regular mr-2 click_button"
                            data-type="file_img"
                          >
                            ファイルを選択
                          </a>
                        </div>
                        <!-- /.media-body -->
                      </div>
                      <!-- /.media -->

                      <input
                        type="hidden"
                        name="photo"
                        id="photo_file_img"
                        value=""
                      />
                    </div>

                    <div class="col-lg-4">
                      <div
                        class="
                          c-form__fileUploadThumbnails
                          clearfix
                          ui-sortable
                          classThumb
                          thumbFileImage thumbFileImage_file_img
                        "
                      >
                        <div
                          class="c-form__fileUploadThumbnail"
                          style="background-image: url('')"
                        >
                          <a class="delete-image" data-type="file_img"
                            ><i class="fa fa-times" aria-hidden="true"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email</label>

              <div class="input-group input-group-flat">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  value="hoangmach.website@gmail.com"
                  required=""
                />
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>

              <div class="input-group input-group-flat">
                <input
                  type="password"
                  class="form-control"
                  name="password"
                  required=""
                  autocomplete="new-password"
                />

                <span class="input-group-text">
                  <a
                    href="#"
                    class="link-secondary"
                    title=""
                    data-bs-toggle="tooltip"
                    data-bs-original-title="Show password"
                  >
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->

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

                      <circle cx="12" cy="12" r="2"></circle>

                      <path
                        d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"
                      ></path>
                    </svg>
                  </a>
                </span>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Confirm password</label>

              <div class="input-group input-group-flat">
                <input
                  id="password-confirm"
                  type="password"
                  class="form-control"
                  name="password_confirmation"
                  required=""
                  autocomplete="new-password"
                />

                <span class="input-group-text">
                  <a
                    href="#"
                    class="link-secondary"
                    title=""
                    data-bs-toggle="tooltip"
                    data-bs-original-title="Show password"
                  >
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->

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

                      <circle cx="12" cy="12" r="2"></circle>

                      <path
                        d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"
                      ></path>
                    </svg>
                  </a>
                </span>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <a
              href="#"
              class="btn btn-link link-secondary"
              data-bs-dismiss="modal"
            >
              Cancel
            </a>

            <button
              type="submit"
              id="submit-domain-create"
              class="btn btn-primary ms-auto"
            >
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->

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

                <line x1="12" y1="5" x2="12" y2="19"></line>

                <line x1="5" y1="12" x2="19" y2="12"></line>
              </svg>
              Update Infomations
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>