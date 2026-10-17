(function(api) {

    api.sectionConstructor['aster-dental-clinic-upsell'] = api.Section.extend({

        // Remove events for this section.
        attachEvents: function() {},

        // Ensure this section is active. Normally, sections without contents aren't visible.
        isContextuallyActive: function() {
            return true;
        }
    });

    const aster_dental_clinic_section_lists = ['banner', 'service'];
    aster_dental_clinic_section_lists.forEach(aster_dental_clinic_homepage_scroll);

    function aster_dental_clinic_homepage_scroll(item, index) {
        // Detect when the front page sections section is expanded (or closed) so we can adjust the preview accordingly.
        item = item.replace(/-/g, '_');
        wp.customize.section('aster_dental_clinic_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                // Value of isExpanding will = true if you're entering the section, false if you're leaving it.
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);


// Example JavaScript/jQuery for tab interaction
jQuery(document).ready(function($) {
    $('.customize-control-radio input[type="radio"]').change(function() {
        // Remove active class from all labels
        $('.customize-control-radio label').removeClass('active');
        
        // Add active class to the selected label
        $(this).next('label').addClass('active');
    });
});

jQuery(document).ready(function($) {
    $('#aster-dental-clinic-custom-container img').on('click', function() {
        $('#aster-dental-clinic-custom-container img').removeClass('aster-dental-clinic-selected-img');
        $(this).addClass('aster-dental-clinic-selected-img');
        $(this).prev('input[type="radio"]').prop('checked', true).trigger('change');
    });
});

(function ($) {
    function ResetDemoSettings() {
        if (!confirm("Are you sure you want to reset demo import settings?")) return;

        $.post(ajaxurl, { action: 'aster_dental_clinic_reset_demo_import_settings' }, function () {
            location.reload();
        });
    }

    window.ResetDemoSettings = ResetDemoSettings;
})(jQuery);

(function ($,wp) {
    function ResetGlobalColor() {
        if (confirm("Are you sure you want to reset global color settings?")) {
            wp.customize.instance("aster_dental_clinic_primary_color").set("#5ea7ff");
        }
    }

    window.ResetGlobalColor = ResetGlobalColor;
})(jQuery, wp);