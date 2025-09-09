<?php
// Define the function if it doesn't exist
if (!function_exists('future_items')) {
    function future_items()
    {
        return [
            [
                'title' => 'Auto-Layout & Font Resizing',
                'description' => 'Intelligent scaling that maintains design integrity',
                'svg' => 'svg-1',
            ],
            [
                'title' => 'Brand Presets & Templates',
                'description' => 'Save your brand guidelines for consistent output',
                'svg' => 'svg-2',
            ],
            [
                'title' => 'CTA Generator (Powered by AI)',
                'description' => 'Smart call-to-action suggestions for better conversions',
                'svg' => 'svg-3',
            ],
            [
                'title' => 'One-Click Downloads',
                'description' => 'Export all formats instantly, organized by platform',
                'svg' => 'svg-4',
            ],
        ];
    }
}
?>

<section id="2-section" class="future">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="future-header">
                    <h3 class="bg-red">Meet Wayone</h3>
                    <h2>The Future Of Ad Creatives</h2>
                    <p>Automate your entire ad creative workflow with Wayone</p>
                </div>
            </div>
        </div>
    </div>
    <div class="future-items">
        <?php foreach (future_items() as $item) : ?>
            <div class="future-item">
                <div class="future-item__image">
                    <?php get_template_part('assets/svg/future/' . $item['svg']); ?>
                </div>
                <p><strong><?php echo $item['title']; ?></strong></p>
                <p><?php echo $item['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>