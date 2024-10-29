<?php 

include 'inc/head.php';

?>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <?= include 'inc/nav.php'; ?>
    <div class="content">
      <div class="mb-9">
        <div class="mx-n4 mx-lg-n6 mt-n5 position-relative mb-md-9" style="height:208px">
          <div class="bg-holder bg-card d-dark-none"
            style="background-image:url(../../assets/img/bg/bg-40.png);background-size:cover;">
          </div>
          <!--/.bg-holder-->

          <div class="bg-holder bg-card d-light-none"
            style="background-image:url(../../assets/img/bg/bg-dark-40.png);background-size:cover;">
          </div>
          <!--/.bg-holder-->

          <div
            class="faq-title-box position-relative bg-body-emphasis border border-translucent p-6 rounded-3 text-center mx-auto">
            <h1>How can we help?</h1>
            <p class="my-3">Search for the topic you need help with or <a href="#!">contact our support</a></p>
            <div class="search-box w-100">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                <input class="form-control search-input search" type="search" aria-label="Search" /><span
                  class="fas fa-search search-box-icon"></span>
              </form>
            </div>
          </div>
        </div>
        <div class="row gx-xl-8 gx-xxl-11 gy-6 faq">
          <div class="col-md-6 col-xl-5 col-xxl-4">
            <div class="faq-sidebar offcanvas offcanvas-start bg-body z-5 w-100" id="faq-offcanvas"
              data-bs-backdrop="false" data-vertical-category-offcanvas="data-vertical-category-offcanvas">
              <ul class="faq-category-tab nav nav-tabs mb-10 mb-md-5 pb-3 pt-2 w-100 w-sm-75 w-md-100 mx-auto">
                <li class="nav-item">
                  <button class="nav-link fw-semibold me-3 fs-8" id="popular" type="button" data-bs-toggle="tab"
                    data-category-filter="popular">Popular Categories</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link fw-semibold fs-8 active" id="all" type="button" data-bs-toggle="tab"
                    data-category-filter="all">All Categories</button>
                </li>
              </ul>
              <div class="faq-subcategory-tab nav nav-tabs w-sm-75 w-md-100 mx-auto mb-4" id="faq-subcategory-tab"
                style="width: 90%">
                <div class="nav-item w-100 popular mb-3" role="presentation">
                  <button class="category nav-link btn bg-body-emphasis w-100 px-3 pt-4 pb-3 fs-8 active"
                    id="tab-sale-101" data-bs-toggle="tab" data-bs-target="#sale-101" type="button" role="tab"
                    aria-selected="false" data-vertical-category-tab="data-vertical-category-tab"><span
                      class="category-icon text-body-secondary fs-6 fa-solid fa-chart-pie"></span><span
                      class="d-block fs-6 fw-bolder lh-1 text-body mt-3 mb-2">Portes et portails</span><span
                      class="d-block text-body fw-normal mb-0 fs-9">manuels, semi-automatiques ou
                      automatiques.</span></button>
                </div>
                <div class="nav-item w-100  mb-3" role="presentation">
                  <button class="category nav-link btn bg-body-emphasis w-100 px-3 pt-4 pb-3 fs-8" id="tab-delivery-101"
                    data-bs-toggle="tab" data-bs-target="#delivery-101" type="button" role="tab" aria-selected="false"
                    data-vertical-category-tab="data-vertical-category-tab"><span
                      class="category-icon text-body-secondary fs-6 fa-solid fa-truck-fast"></span><span
                      class="d-block fs-6 fw-bolder lh-1 text-body mt-3 mb-2">Aires de jeux</span><span
                      class="d-block text-body fw-normal mb-0 fs-9">toute zone spécialement aménagée et équipée pour
                      être utilisée collectivement par des enfants à des fins de jeux.</span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-7 col-xxl-8 mt-md-11">
            <div class="faq-subcategory-content tab-content">
              <div class="empty-header d-none d-md-block"></div>
              <button class="btn btn-link d-md-none my-6 fs-8 ps-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#faq-offcanvas"> <span class="fa-solid fa-chevron-left fs-9 me-2"
                  data-fa-transform="up-2"></span>Categories</button>
              <div class="tab-pane fade active show" id="sale-101">
                <ul class="list-inline mb-0">
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Périodicité de vérification après le contrôle initial ou la première utilisation</h4>
                      <p class="mb-0 text-body-tertiary">6 mois.</p>
                    </div>
                  </li>
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Personne ou organisme chargé de la vérification</h4>
                      <p class="mb-0 text-body-tertiary">Personne qualifiée appartenant ou non à l’établissement</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="delivery-101">
                <ul class="list-inline mb-0">
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Périodicité de vérification après le contrôle initial ou la première utilisation</h4>
                      <p class="mb-0 text-body-tertiary">Selon la périodicité prévue par le fabricant</p>
                    </div>
                  </li>
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Personne ou organisme chargé de la vérification</h4>
                      <p class="mb-0 text-body-tertiary">Personne qualifiée appartenant ou non à l’établissement</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="notification-101">
                <ul class="list-inline mb-0">
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Do you allow customized notification option?</h4>
                      <p class="mb-0 text-body-tertiary">Yes, you can customize and select the topics that you want to
                        be notified about and remove the ones you think are unnecessary. </p>
                    </div>
                  </li>
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Are my notifications secure?</h4>
                      <p class="mb-0 text-body-tertiary">Yes, we take data security seriously and all the information,
                        including your notification types and other things, are protected and cannot be shared.</p>
                    </div>
                  </li>
                </ul>
                <hr class="border-top" />
                <ul class="faq-list list-inline">
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Do you allow direct actions on your notification?</h4>
                      <p class="mb-0 text-body-tertiary">Depending on the notification type, and your settings and
                        privacy settings. Please remember, we do not allow open sharing of notifications.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Do you allow multi-device notification?</h4>
                      <p class="mb-0 text-body-tertiary">Certainly! No need to worry about getting notified about
                        anything as you can log in to multiple devices and get notified according to your preferred way.
                      </p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Do you allow multi-language notification?</h4>
                      <p class="mb-0 text-body-tertiary">We have a preselection checkbox to choose your preferred
                        language to get notified in. You can always change the settings later.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I opt out anytime?</h4>
                      <p class="mb-0 text-body-tertiary">You can opt out or modify the preferred notification option as
                        you want to and opt out anytime.</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="order-101">
                <ul class="list-inline mb-0">
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Do offer wholesale order option?</h4>
                      <p class="mb-0 text-body-tertiary">Yes, you can choose the desired product and select the order
                        option to bulk, and you’re good to go.</p>
                    </div>
                  </li>
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I change my order?</h4>
                      <p class="mb-0 text-body-tertiary">If you’ve already clicked check out, then you’ll need to wait
                        for the confirmation call before changing the order. We recommend deciding beforehand to avoid
                        further hassles. </p>
                    </div>
                  </li>
                </ul>
                <hr class="border-top" />
                <ul class="faq-list list-inline">
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Do you allow viewing the order history?</h4>
                      <p class="mb-0 text-body-tertiary">Yes, you can see and manage your order history from the orders
                        page that we have and keep your details personal.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Do you notify about the placed orders?</h4>
                      <p class="mb-0 text-body-tertiary">You can palace personalize the notification option as you want
                        to, and we’ll keep you updated accordingly about your orders and everything.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">How do I track my orders?</h4>
                      <p class="mb-0 text-body-tertiary">You can easily track all your currently placed orders with the
                        ID number that we provided you. Please remember not to share the ID with any untrusted contact.
                      </p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">How do I know my order placement is confirmed?</h4>
                      <p class="mb-0 text-body-tertiary">We’ll send an OTP (one time password) to verify and confirm the
                        order, and you’ll be notified via your preferred notification method.</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="networking-101">
                <ul class="list-inline mb-0">
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">What are some best features for networking coming with this
                        template?</h4>
                      <p class="mb-0 text-body-tertiary">Some features included in this template are responsiveness
                        &amp; compatibility, different contact form UIs, social pages and apps and many more. Explore
                        and modify according to your wish and your resolution to grow!</p>
                    </div>
                  </li>
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">How can I utilize networking to gain insights into
                        customer/client needs and preferences?</h4>
                      <p class="mb-0 text-body-tertiary">We provide detailed data visualization dashboards that can help
                        you gain the required data to analyze and act according to your needs so that you get to enhance
                        your growth through networking.</p>
                    </div>
                  </li>
                </ul>
                <hr class="border-top" />
                <ul class="faq-list list-inline">
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Are there any specific configuration process applied to use
                        the networking of your site?</h4>
                      <p class="mb-0 text-body-tertiary">No, you can just use it as is. Yet, we recommend adjusting the
                        page as you need, so you get the optimized feed to see.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">How can I use networking to generate leads and attract new
                        customers or clients?</h4>
                      <p class="mb-0 text-body-tertiary">By using the default dashboards that we avail with the theme,
                        you can log all your data and monitor the networking of your site.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">How can I effectively network with customers and clients?
                      </h4>
                      <p class="mb-0 text-body-tertiary">Use our social apps pages to build any networking site and see
                        yourself grow with enhanced and better networking options.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">What graphs can I use to build strong relationships with
                        customers and clients?</h4>
                      <p class="mb-0 text-body-tertiary">We’ve added different data visualization charts with the
                        template that can help you track your networking sites as well and help you in building a
                        storing network. See the modules that came inclusive with the theme and you’ll get necessary
                        insights.</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="customize-101">
                <ul class="list-inline mb-0">
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I customize the design as needed?</h4>
                      <p class="mb-0 text-body-tertiary">Yes, you can just go to: settings&gt;site
                        theme&gt;design&gt;change and customize according to your needs with easy filters and checkbox
                        from the given ones. </p>
                    </div>
                  </li>
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I personalize the contents as I need?</h4>
                      <p class="mb-0 text-body-tertiary">Yes, we allow easy and simple customization of feed and
                        notification. You can select category and get the customized result on your feed.</p>
                    </div>
                  </li>
                </ul>
                <hr class="border-top" />
                <ul class="faq-list list-inline">
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I integrate third-party extensions or plugins into the
                        e-commerce site template?</h4>
                      <p class="mb-0 text-body-tertiary">Yes, we’ve already installed necessary plugins and covered the
                        most of what you might need. Also, you can integrate any third-party plugin that you need with
                        our easy documentation.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I customize the checkout process on the e-commerce site
                        template?</h4>
                      <p class="mb-0 text-body-tertiary">You can edit and choose custom modules or import any from the
                        Bootstrap components and customize the design as you want to.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I use the customized design and maintain responsiveness?
                      </h4>
                      <p class="mb-0 text-body-tertiary">You can if you follow the documentation accordingly and modify
                        the codebase without error.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Is it possible to change the color scheme of the site
                        template?</h4>
                      <p class="mb-0 text-body-tertiary">We provide the theme color scheme in the box. You can choose
                        any from there or use any custom color as your needs.</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="marketing-101">
                <ul class="list-inline mb-0">
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">How is this theme going to help my marketing strategy?</h4>
                      <p class="mb-0 text-body-tertiary">This template is SEO optimized and comes with built-in
                        user-friendly dashboards that will help you track your leads, sales and help you get better
                        insights into what you need to do for better growth.</p>
                    </div>
                  </li>
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Do I need any distinct plugin or software to use it?</h4>
                      <p class="mb-0 text-body-tertiary">Certainly not, if you do not want to customize it totally. For
                        full customization, please see our documentation.</p>
                    </div>
                  </li>
                </ul>
                <hr class="border-top" />
                <ul class="faq-list list-inline">
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I use the template for multiple sites?</h4>
                      <p class="mb-0 text-body-tertiary">Yes, we avail a multi-site option for this template. Please
                        contact our support: support@phoenix.themewagon.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Do you avail necessary marketing support?</h4>
                      <p class="mb-0 text-body-tertiary">We provide 24/7 technical support for the template and we cover
                        related issues. Contact our helpline for further details.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I change the style and design while also maintaining site
                        SEO?</h4>
                      <p class="mb-0 text-body-tertiary">You certainly can, all our components are responsive and SEO
                        optimized. Enjoy creating with Phoenix.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I customize the emails pages of the theme?</h4>
                      <p class="mb-0 text-body-tertiary">Yes, our theme is totally customizable, and it will remain
                        compatible and responsive even if you customize it. If you do not change or modify the codebase,
                        there is nothing to worry about, since we provide 24/7 support for this theme.</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="our-vision-101">
                <ul class="list-inline mb-0">
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">What solutions do you offer?</h4>
                      <p class="mb-0 text-body-tertiary">We take on-demand projects and will be available for
                        contractual front-end development (React/Vue), back-end development (LaRavel/NodeJS), UX/UI
                        design and search engine optimization (SEO).</p>
                    </div>
                  </li>
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">What frameworks and technologies do you specialize in at our
                        web development farm?</h4>
                      <p class="mb-0 text-body-tertiary">Our efficient offers solutions including but not limited to
                        HTML5, CSS3, JavaScript (such as React, Angular), PHP, Python, WordPress, Drupal, and Magento.
                        We have experience working with various content management systems (CMS) and e-commerce
                        platforms</p>
                    </div>
                  </li>
                </ul>
                <hr class="border-top" />
                <ul class="faq-list list-inline">
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">How do you ensure customer satisfaction?</h4>
                      <p class="mb-0 text-body-tertiary">We achieve it by closely collaborating with our clients
                        throughout the development process, actively seeking feedback, providing regular project
                        updates, and ensuring that our solutions align with their business goals and objectives.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">How does our web development provider ensure the security of
                        websites and web applications?</h4>
                      <p class="mb-0 text-body-tertiary">Security is a top priority for our web development provider. We
                        implement industry best practices, such as secure coding techniques, data encryption, protection
                        against common web vulnerabilities (e.g., Cross-Site Scripting, SQL injection), and user
                        authentication mechanisms to ensure the confidentiality, integrity, and availability of your
                        website or web application</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">How can you get started with our web development providers
                        services?</h4>
                      <p class="mb-0 text-body-tertiary">Simply reach out to our team, and we will schedule an initial
                        consultation to discuss your project requirements, goals, and timelines. We will provide you
                        with a tailored proposal outlining the recommended services, deliverables, and pricing. Once we
                        have your approval, we will embark on the journey of bringing your vision to life.</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="scheduling-101">
                <ul class="list-inline mb-0">
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I request changes to the project timeline after it has
                        been finalized?</h4>
                      <p class="mb-0 text-body-tertiary">If you require changes to the project timeline, please
                        communicate with our team as early as possible. We will assess the feasibility of the requested
                        changes and work with you to accommodate them if feasible.</p>
                    </div>
                  </li>
                  <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-8 text-primary"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I track the progress of my project and stay updated on
                        the schedule?</h4>
                      <p class="mb-0 text-body-tertiary">Absolutely! We provide regular project updates, including
                        progress reports and milestone achievements. We can set up a communication channel where you can
                        track project progress and stay informed about the schedule throughout the development process.
                      </p>
                    </div>
                  </li>
                </ul>
                <hr class="border-top" />
                <ul class="faq-list list-inline">
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I request an expedited timeline for my project?</h4>
                      <p class="mb-0 text-body-tertiary">If you have a specific deadline or require an expedited
                        timeline for your project, please inform us during the initial discussions. We will evaluate the
                        feasibility and provide you with a realistic timeline based on the projects complexity and our
                        resource availability.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can I make changes to the project scope or requirements once
                        the scheduling has been finalized?</h4>
                      <p class="mb-0 text-body-tertiary">It’s recommended that you do not. Still, if you need to make
                        changes to the project scope or requirements after scheduling, please communicate with our team
                        as soon as possible. We will assess the impact of the changes on the schedule and provide you
                        with revised timelines and any necessary adjustments.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">Can your web development provider handle multiple projects
                        simultaneously?</h4>
                      <p class="mb-0 text-body-tertiary">Yes, our web development provider is equipped to handle
                        multiple projects simultaneously. We have a dedicated team of developers and project managers
                        who excel at multitasking and prioritizing tasks. We strive to allocate resources effectively to
                        ensure that each project receives the attention it requires.</p>
                    </div>
                  </li>
                  <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                    <div>
                      <h4 class="mb-3 text-body-highlight">How far in advance should I contact your web development
                        provider to schedule a project?</h4>
                      <p class="mb-0 text-body-tertiary">We recommend reaching out to our web development provider as
                        soon as you have a project in mind. Contacting us in advance allows us to allocate the necessary
                        resources and plan our schedule accordingly. It also ensures that we can accommodate your
                        project within your desired timeframe.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute">
        <div class="row g-0 justify-content-between align-items-center h-100">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span
                class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br
                class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-body-tertiary text-opacity-85">v1.18.0</p>
          </div>
        </div>
      </footer>
    </div>
    <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
      data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
      <div class="modal-dialog">
        <div class="modal-content mt-15 rounded-pill">
          <div class="modal-body p-0">
            <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                <input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search"
                  placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>

              </form>
              <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                data-bs-dismiss="search">
                <button class="btn btn-link p-0" aria-label="Close"></button>
              </div>
              <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                <div class="scrollbar-overlay" style="max-height: 30rem;">
                  <div class="list pb-3">
                    <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span
                        class="text-body-quaternary">results</span></h6>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Recently Searched </h6>
                    <div class="py-2"><a class="dropdown-item"
                        href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">

                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left"
                              data-fa-transform="shrink-2"></span> Store Macbook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">

                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left"
                              data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                        </div>
                      </a>

                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Products</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                        href="../../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3"
                            src="../../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                              class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB
                              Storage</span></p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center"
                        href="../../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="img-fluid"
                            src="../../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                              class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                        </div>
                      </a>

                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Quick Links</h6>
                    <div class="py-2"><a class="dropdown-item"
                        href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">

                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body"
                              data-fa-transform="shrink-2"></span> Support MacBook House</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">

                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body"
                              data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>

                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Files</h6>
                    <div class="py-2"><a class="dropdown-item"
                        href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">

                          <div class="fw-normal text-body-highlight title"><span
                              class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library
                            MacBook folder.rar</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">

                          <div class="fw-normal text-body-highlight title"> <span
                              class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature
                            MacBook extensions.txt</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">

                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body"
                              data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                        </div>
                      </a>

                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Members</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                        href="../../pages/members.html">
                        <div class="avatar avatar-l status-online  me-2 text-body">
                          <img class="rounded-circle " src="../../assets/img/team/40x40/10.webp" alt="" />

                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.html">
                        <div class="avatar avatar-l  me-2 text-body">
                          <img class="rounded-circle " src="../../assets/img/team/40x40/12.webp" alt="" />

                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                        </div>
                      </a>

                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Related Searches</h6>
                    <div class="py-2"><a class="dropdown-item"
                        href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">

                          <div class="fw-normal text-body-highlight title"><span
                              class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search
                            in the Web MacBook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">

                          <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body"
                              data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>

                    </div>
                  </div>
                  <div class="text-center">
                    <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
      var navbarTop = document.querySelector('.navbar-top');
      if (navbarTopStyle === 'darker') {
        navbarTop.setAttribute('data-navbar-appearance', 'darker');
      }

      var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
      var navbarVertical = document.querySelector('.navbar-vertical');
      if (navbarVertical && navbarVerticalStyle === 'darker') {
        navbarVertical.setAttribute('data-navbar-appearance', 'darker');
      }
    </script>
    <div class="support-chat-container">
      <div class="container-fluid support-chat">
        <div class="card bg-body-emphasis">
          <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
            <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span
                class="fa-solid fa-circle text-success fs-11"></span></h5>
            <div class="btn-reveal-trigger">
              <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button"
                id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                aria-expanded="false" data-bs-reference="parent"><span
                  class="fas fa-ellipsis-h text-body"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a
                  class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in
                  chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report
                  to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
            </div>
          </div>
          <div class="card-body chat p-0">
            <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
              <div class="text-end mt-6"><a
                  class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                  href="#!">
                  <p class="mb-0 fw-semibold fs-9">I need help with something</p><span
                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a><a
                  class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                  href="#!">
                  <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span
                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a><a
                  class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                  href="#!">
                  <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span
                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a><a
                  class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                  href="#!">
                  <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span
                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a>
              </div>
              <div class="text-center mt-auto">
                <div class="avatar avatar-3xl status-online"><img
                    class="rounded-circle border border-3 border-light-subtle" src="../../assets/img/team/30.webp"
                    alt="" /></div>
                <h5 class="mt-2 mb-3">Eric</h5>
                <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or by email
                  within 24 hours.</p>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
            <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4">
              <input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text"
                placeholder="Write message" />
              <label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos"><span
                  class="fa-solid fa-image"></span></label>
              <input class="d-none" type="file" accept="image/*" id="supportChatPhotos" />
              <label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment">
                <span class="fa-solid fa-paperclip"></span></label>
              <input class="d-none" type="file" id="supportChatAttachment" />
            </div>
            <button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs-9"></span></button>
          </div>
        </div>
      </div>
      <button class="btn btn-support-chat p-0 border border-translucent"><span
          class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span
          class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span
            class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span
          class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span
          class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
    </div>
  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->


  <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
    aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
      <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
        <div>
          <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
          <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
        </div>
        <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span
            class="fas fa-times fs-8"> </span></button>
      </div>
      <button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
          class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
    </div>
    <div class="offcanvas-body scrollbar px-card" id="themeController">
      <div class="setting-panel-item mt-0">
        <h5 class="setting-panel-item-title">Color Scheme</h5>
        <div class="row gx-2">
          <div class="col-4">
            <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light"
              data-theme-control="phoenixTheme" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../../assets/img/generic/default-light.png" alt="" /></span><span
                class="label-text">Light</span></label>
          </div>
          <div class="col-4">
            <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark"
              data-theme-control="phoenixTheme" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">
                Dark</span></label>
          </div>
          <div class="col-4">
            <input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto"
              data-theme-control="phoenixTheme" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../../assets/img/generic/auto.png" alt="" /></span><span class="label-text"> Auto</span></label>
          </div>
        </div>
      </div>
      <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="setting-panel-item-title mb-1">RTL </h5>
          <div class="form-check form-switch mb-0">
            <input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" />
          </div>
        </div>
        <p class="mb-0 text-body-tertiary">Change text direction</p>
      </div>
      <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
          <div class="form-check form-switch mb-0">
            <input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" />
          </div>
        </div>
        <p class="mb-0 text-body-tertiary">Toggle support chat</p>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Navigation Type</h5>
        <div class="row gx-2">
          <div class="col-6">
            <input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical"
              data-theme-control="phoenixNavbarPosition"
              data-page-url="../../documentation/layouts/vertical-navbar.html" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/default-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png"
                  alt="" /></span><span class="label-text">Vertical</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio"
              value="horizontal" data-theme-control="phoenixNavbarPosition"
              data-page-url="../../documentation/layouts/horizontal-navbar.html" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/top-default-dark.png"
                  alt="" /></span><span class="label-text"> Horizontal</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo"
              data-theme-control="phoenixNavbarPosition"
              data-page-url="../../documentation/layouts/combo-navbar.html" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/nav-combo-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/nav-combo-dark.png"
                  alt="" /></span><span class="label-text"> Combo</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav"
              data-theme-control="phoenixNavbarPosition" data-page-url="../../documentation/layouts/dual-nav.html" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/dual-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/dual-dark.png"
                  alt="" /></span><span class="label-text"> Dual nav</span></label>
          </div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6">
            <input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default"
              data-theme-control="phoenixNavbarVerticalStyle" />
            <label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img
                class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png"
                alt="" /><img class="img-fluid img-prototype d-light-none"
                src="../../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none">
                Default</span><span class="label-text d-light-none">Default</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker"
              data-theme-control="phoenixNavbarVerticalStyle" />
            <label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img
                class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/vertical-darker.png"
                alt="" /><img class="img-fluid img-prototype d-light-none"
                src="../../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none">
                Darker</span><span class="label-text d-light-none">Lighter</span></label>
          </div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
        <div class="row gx-2">
          <div class="col-6">
            <input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default"
              data-theme-control="phoenixNavbarTopShape"
              data-page-url="../../documentation/layouts/horizontal-navbar.html" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-default-dark.png"
                  alt="" /></span><span class="label-text">Default</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim"
              data-theme-control="phoenixNavbarTopShape"
              data-page-url="../../documentation/layouts/horizontal-navbar.html#horizontal-navbar-slim" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../../assets/img/generic/top-slim.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-slim-dark.png"
                  alt="" /></span><span class="label-text"> Slim</span></label>
          </div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6">
            <input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default"
              data-theme-control="phoenixNavbarTopStyle" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-darker.png"
                  alt="" /></span><span class="label-text">Default</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker"
              data-theme-control="phoenixNavbarTopStyle" />
            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../../assets/img/generic/navbar-top-style-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-lighter.png"
                  alt="" /></span><span class="label-text d-dark-none">Darker</span><span
                class="label-text d-light-none">Lighter</span></label>
          </div>
        </div>
      </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary"
        href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase
        template</a>
    </div>
  </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <div class="card-body d-flex align-items-center px-2 py-1">
      <div class="position-relative rounded-start" style="height:34px;width:28px">
        <div class="settings-popover"><span class="ripple"><span
              class="fa-spin position-absolute all-0 d-flex flex-center"><span
                class="icon-spin position-absolute all-0 d-flex flex-center">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                    fill="#2A7BE4"></path>
                </svg></span></span></span></div>
      </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
    </div>
  </a>

<?= include 'inc/faqFoot.php' ?>

</html>