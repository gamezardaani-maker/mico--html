<?php

//foreach function for rendeting top header items

function renderContactInfo($contacts) {
    foreach ($contacts as $contact) {
        echo '<a href="' . htmlspecialchars($contact['link']) . '">';
        echo '<i class="fa ' . htmlspecialchars($contact['icon']) . '" aria-hidden="true"></i>&nbsp;'; // adds a small space
        echo '<span>' . htmlspecialchars($contact['text']) . '</span>';
        echo '</a>';
    }
}



//render navigation menu

function renderNavMenu($items) {
    $currentPage = basename($_SERVER['PHP_SELF']);
    foreach ($items as $item) {
        $activeClass = ($item['link'] === $currentPage) ? 'active' : '';
        echo '<li class="nav-item ' . $activeClass . '">';
        echo '<a class="nav-link" href="' . htmlspecialchars($item['link']) . '">';
        echo htmlspecialchars($item['title']);
        if ($activeClass) {
            echo ' <span class="sr-only">(current)</span>';
        }
        echo '</a></li>';
    }
}

//render authorisation links

function renderAuthLinks($links) {
    foreach ($links as $link) {
        echo '<a href="' . htmlspecialchars($link['link']) . '">';
        echo '<i class="fa ' . htmlspecialchars($link['icon']) . '" aria-hidden="true"></i>';
        echo '<span>' . htmlspecialchars($link['text']) . '</span>';
        echo '</a>';
    }
}

//render carousel

function renderCarousel($slides) {
    if (empty($slides)) return;

    echo '<div class="carousel-inner">';
    foreach ($slides as $index => $slide) {
        $activeClass = $index === 0 ? ' active' : '';
        echo '<div class="carousel-item' . $activeClass . '">';
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-md-6">';
        echo '<div class="detail-box">';
        echo '<div class="play_btn"><button><i class="fa fa-play" aria-hidden="true"></i></button></div>';
        echo '<h1>' . htmlspecialchars($slide['title']) . ' <br><span>' . htmlspecialchars($slide['subtitle']) . '</span></h1>';
        echo '<p>' . htmlspecialchars($slide['text']) . '</p>';
        echo '<a href="' . htmlspecialchars($slide['button_link']) . '">' . htmlspecialchars($slide['button_text']) . '</a>';
        echo '</div></div>';
        echo '<div class="col-md-6">';
        echo '<div class="img-box">';
        echo '<img src="' . htmlspecialchars($slide['image']) . '" alt="">';
        echo '</div></div></div></div></div>';
    }
    echo '</div>';
}

//lists info for booking appointments
function renderSelectOptions($options) {
    foreach ($options as $option) {
        echo '<option value="' . htmlspecialchars($option) . '">' . htmlspecialchars($option) . '</option>';
    }
}

//rendering patients data in booking forms

function renderFormFields($fields) {
    echo '<div class="form-row">';
    foreach ($fields as $field) {
        echo '<div class="form-group col-lg-4">'; // Keep col-lg-4 for exact width
        echo '<label for="' . htmlspecialchars($field['id']) . '">' . htmlspecialchars($field['label']) . '</label>';
        
        // Determine the name attribute: use 'name' if provided, otherwise fallback to id
        $nameAttr = !empty($field['name']) ? $field['name'] : $field['id'];

        if (!empty($field['is_date'])) {
            echo '<div class="input-group date" id="' . htmlspecialchars($field['id']) . '" data-date-format="mm-dd-yyyy">';
            echo '<input type="text" class="form-control" name="' . htmlspecialchars($nameAttr) . '" readonly>';
            echo '<span class="input-group-addon date_icon">';
            echo '<i class="fa fa-calendar" aria-hidden="true"></i>';
            echo '</span></div>';
        } else {
            echo '<input type="' . htmlspecialchars($field['type']) . '" class="form-control" id="' . htmlspecialchars($field['id']) . '" name="' . htmlspecialchars($nameAttr) . '" placeholder="' . htmlspecialchars($field['placeholder'] ?? '') . '">';
        }

        echo '</div>'; // close form-group
    }
    echo '</div>'; // close form-row
}

//render submit button

function renderSubmitButton($button) {
    echo '<div class="btn-box">';
    echo '<button type="submit" class="' . htmlspecialchars($button['class']) . '">' . htmlspecialchars($button['text']) . '</button>';
    echo '</div>';
}

//render about
function renderAboutSection($aboutSections) {
    if (empty($aboutSections)) return;

    foreach ($aboutSections as $about) {
        echo '<div class="row">';
        echo '  <div class="col-md-6">';
        echo '    <div class="img-box">';
        echo '      <img src="' . htmlspecialchars($about['image'] ?? '') . '" alt="">';
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="col-md-6">';
        echo '    <div class="detail-box">';
        echo '      <div class="heading_container">';
        echo '        <h2>' . htmlspecialchars($about['title'] ?? '') . ' <span>' . htmlspecialchars($about['highlight'] ?? '') . '</span></h2>';
        echo '      </div>';
        echo '      <p>' . htmlspecialchars($about['description'] ?? '') . '</p>';
        echo '      <a href="' . htmlspecialchars($about['link'] ?? '#') . '">Read More</a>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
}


//rendering content in treatment section

function renderTreatments($treatments) {
    if (empty($treatments)) return;

    foreach ($treatments as $treatment) {
        echo '<div class="col-md-6 col-lg-3">';
        echo '  <div class="box">';
        echo '    <div class="img-box">';
        echo '      <img src="' . htmlspecialchars($treatment['image']) . '" alt="">';
        echo '    </div>';
        echo '    <div class="detail-box">';
        echo '      <h4>' . htmlspecialchars($treatment['title']) . '</h4>';
        echo '      <p>' . htmlspecialchars($treatment['description']) . '</p>';
        echo '      <a href="' . htmlspecialchars($treatment['link']) . '">Read More</a>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
}

//rendering infosection for footer


// Function to render address contacts and social links
function render_contact_section($contacts, $socials) {
    echo '<div class="col-md-6 col-lg-3">';
    echo '<h5>Address</h5>';
    echo '<div class="info_contact">';
    foreach ($contacts as $contact) {
        $icon = htmlspecialchars($contact['icon'] ?? '');
        $text = htmlspecialchars($contact['text'] ?? '');
        $link = htmlspecialchars($contact['link'] ?? '#');
        echo '<a href="' . $link . '"><i class="fa fa-' . $icon . '" aria-hidden="true"></i> <span>' . $text . '</span></a>';
    }
    echo '</div>';

    echo '<div class="social_box">';
    foreach ($socials as $social) {
        $icon = htmlspecialchars($social['icon'] ?? '');
        $link = htmlspecialchars($social['link'] ?? '#');
        echo '<a href="' . $link . '"><i class="fa fa-' . $icon . '" aria-hidden="true"></i></a>';
    }
    echo '</div>';
    echo '</div>';
}

// Function to render useful links
function render_links_section($links) {
    echo '<div class="col-md-6 col-lg-3">';
    echo '<div class="info_links">';
    echo '<h5>Useful Links</h5>';
    echo '<div class="info_links_menu">';
    foreach ($links as $link) {
        $href = htmlspecialchars($link['href'] ?? '#');
        $name = htmlspecialchars($link['name'] ?? '');
        $active = !empty($link['active']) ? 'class="active"' : '';
        echo '<a href="' . $href . '" ' . $active . '>' . $name . '</a>';
    }
    echo '</div></div></div>';
}

// Function to render posts or news
function render_posts_section($sections) {
    foreach ($sections as $section) {
        echo '<div class="col-md-6 col-lg-3">';
        echo '<div class="info_post">';
        echo '<h5>' . htmlspecialchars($section['title'] ?? '') . '</h5>';
        foreach ($section['items'] as $item) {
            $image = htmlspecialchars($item['image'] ?? '');
            $title = htmlspecialchars($item['title'] ?? '');
            echo '<div class="post_box">';
            echo '<div class="img-box"><img src="' . $image . '" alt=""></div>';
            echo '<p>' . $title . '</p>';
            echo '</div>';
        }
        echo '</div></div>';
    }
}



