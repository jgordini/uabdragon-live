<?php
/**
 * Script to update Frost pattern files to UAB Dragon theme styles
 * 
 * Instructions:
 * 1. Save this script in the root directory of your theme
 * 2. Run it with `php update-patterns.php`
 * 3. Check the output to make sure all patterns were updated successfully
 */

// Directory containing patterns
$patterns_dir = __DIR__ . '/patterns';

// Color mappings (Frost colors => UAB Dragon colors)
$color_mappings = [
    // Color classes
    'has-base-color' => 'has-white-color',
    'has-contrast-color' => 'has-black-color',
    'has-primary-color' => 'has-uab-green-color',
    'has-secondary-color' => 'has-campus-green-color',
    'has-neutral-color' => 'has-grey-color',
    
    // Background color classes
    'has-base-background-color' => 'has-white-background-color',
    'has-contrast-background-color' => 'has-uab-green-background-color',
    'has-primary-background-color' => 'has-campus-green-background-color',
    'has-secondary-background-color' => 'has-loyal-yellow-background-color',
    'has-neutral-background-color' => 'has-grey-background-color',
    
    // Border color classes
    'has-base-border-color' => 'has-white-border-color',
    'has-contrast-border-color' => 'has-uab-green-border-color',
    'has-primary-border-color' => 'has-campus-green-border-color',
    'has-secondary-border-color' => 'has-loyal-yellow-border-color',
    'has-neutral-border-color' => 'has-grey-border-color'
];

// Font size mappings
$font_size_mappings = [
    'has-small-font-size' => 'has-sm-font-size',
    'has-medium-font-size' => 'has-base-font-size',
    'has-large-font-size' => 'has-lg-font-size',
    'has-x-large-font-size' => 'has-xl-font-size',
    'has-xx-large-font-size' => 'has-2xl-font-size',
    'has-xxx-large-font-size' => 'has-3xl-font-size',
    'has-max-36-font-size' => 'has-4xl-font-size',
    'has-max-48-font-size' => 'has-5xl-font-size'
];

// Category and slug mappings
$category_mappings = [
    'frost-' => 'uabdragon-',
    'Categories: frost' => 'Categories: uabdragon',
    'Categories: featured' => 'Categories: uabdragon-featured',
    'Categories: header' => 'Categories: uabdragon-header',
    'Categories: footer' => 'Categories: uabdragon-footer',
    'Categories: pricing' => 'Categories: uabdragon-pricing',
    'Categories: team' => 'Categories: uabdragon-team',
    'Categories: testimonial' => 'Categories: uabdragon-testimonials',
    'Categories: cta' => 'Categories: uabdragon-cta',
    'Categories: page' => 'Categories: uabdragon-page',
    'Categories: posts' => 'Categories: uabdragon-posts',
    'Categories: hero' => 'Categories: uabdragon-hero'
];

// Text domain replacements
$text_domain_replacements = [
    "'frost'" => "'uabdragon'",
    '"frost"' => '"uabdragon"'
];

// Check if the patterns directory exists
if (!is_dir($patterns_dir)) {
    die("Patterns directory not found: $patterns_dir\n");
}

// Get all php files in the patterns directory
$pattern_files = glob("$patterns_dir/*.php");

if (empty($pattern_files)) {
    die("No pattern files found in $patterns_dir\n");
}

echo "Found " . count($pattern_files) . " pattern files to update.\n\n";

$updated_count = 0;
$skipped_count = 0;

// Loop through each pattern file
foreach ($pattern_files as $file) {
    $filename = basename($file);
    echo "Processing $filename... ";
    
    // Read the file content
    $content = file_get_contents($file);
    if (!$content) {
        echo "Error reading file, skipping.\n";
        $skipped_count++;
        continue;
    }
    
    // Make a backup of the original file
    $backup_file = $file . '.bak';
    if (!file_put_contents($backup_file, $content)) {
        echo "Error creating backup, skipping.\n";
        $skipped_count++;
        continue;
    }
    
    // Update the Slug in the file header
    $content = preg_replace('/Slug: frost\//', 'Slug: uabdragon/', $content);
    
    // Replace color classes
    foreach ($color_mappings as $frost_color => $uab_color) {
        $content = str_replace($frost_color, $uab_color, $content);
    }
    
    // Replace font size classes
    foreach ($font_size_mappings as $frost_font => $uab_font) {
        $content = str_replace($frost_font, $uab_font, $content);
    }
    
    // Replace categories and slugs
    foreach ($category_mappings as $frost_cat => $uab_cat) {
        $content = str_replace($frost_cat, $uab_cat, $content);
    }
    
    // Replace text domain
    foreach ($text_domain_replacements as $frost_text => $uab_text) {
        $content = str_replace($frost_text, $uab_text, $content);
    }
    
    // Write the updated content back to the file
    if (file_put_contents($file, $content)) {
        echo "Updated successfully.\n";
        $updated_count++;
    } else {
        echo "Error writing updated content, restoring from backup.\n";
        copy($backup_file, $file);
        $skipped_count++;
    }
}

echo "\nUpdate complete. $updated_count files updated, $skipped_count files skipped.\n";
echo "Backup files were created with .bak extension. You can remove them after verifying the updates.\n";

// Now update the spacing variables in all pattern files
echo "\nUpdating spacing variables...\n";

// Get all pattern files again (including newly updated ones)
$pattern_files = glob("$patterns_dir/*.php");
$spacing_updated_count = 0;

// Define spacing mappings - Frost to UAB Dragon
$spacing_mappings = [
    'var:preset|spacing|x-small' => 'var:preset|spacing|xs',
    'var:preset|spacing|small' => 'var:preset|spacing|sm',
    'var:preset|spacing|medium' => 'var:preset|spacing|md',
    'var:preset|spacing|large' => 'var:preset|spacing|lg',
    'var:preset|spacing|x-large' => 'var:preset|spacing|xl'
];

foreach ($pattern_files as $file) {
    $filename = basename($file);
    echo "Processing spacing in $filename... ";
    
    // Read the file content
    $content = file_get_contents($file);
    
    // Replace spacing variables
    $original_content = $content;
    foreach ($spacing_mappings as $frost_spacing => $uab_spacing) {
        $content = str_replace($frost_spacing, $uab_spacing, $content);
    }
    
    // Only update the file if changes were made
    if ($content !== $original_content) {
        if (file_put_contents($file, $content)) {
            echo "Spacing updated.\n";
            $spacing_updated_count++;
        } else {
            echo "Error updating spacing.\n";
        }
    } else {
        echo "No spacing updates needed.\n";
    }
}

echo "\nSpacing update complete. $spacing_updated_count files had spacing variables updated.\n";
echo "\nPlease manually check some of the patterns to verify the updates.\n";
