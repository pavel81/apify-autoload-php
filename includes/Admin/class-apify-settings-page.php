<?php
add_settings_field(
    'apify_duplicate_mode',
    'Duplicate handling',
    function () {
        $value = get_option('apify_duplicate_mode', 'update');
        ?>
        <select name="apify_duplicate_mode">
            <option value="update" <?php selected($value, 'update'); ?>>Update</option>
            <option value="skip" <?php selected($value, 'skip'); ?>>Skip</option>
            <option value="log" <?php selected($value, 'log'); ?>>Log only</option>
            <option value="error" <?php selected($value, 'error'); ?>>Throw error</option>
        </select>
        <?php
    },
    'apify-settings',
    'default'
);
