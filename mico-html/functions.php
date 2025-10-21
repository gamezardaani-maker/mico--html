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
    foreach ($items as $item) {
        $activeClass = !empty($item['active']) ? 'active' : '';
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

