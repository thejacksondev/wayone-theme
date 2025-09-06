<?php
// Define the function if it doesn't exist
if (!function_exists('future_items')) {
    function future_items()
    {
        return [
            [
                'title' => 'Auto-Layout & Font Resizing',
                'description' => 'Intelligent scaling that maintains design integrity',
            ],
            [
                'title' => 'Brand Presets & Templates',
                'description' => 'Save your brand guidelines for consistent output',
            ],
            [
                'title' => 'CTA Generator (Powered by AI)',
                'description' => 'Smart call-to-action suggestions for better conversions',
            ],
            [
                'title' => 'One-Click Downloads',
                'description' => 'Export all formats instantly, organized by platform',
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
        <div class="row">
            <?php foreach (future_items() as $item) : ?>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="future-item">
                        <div class="future-item__image">
                            <img src="https://placehold.co/398x398" alt="Placeholder image" class="img-responsive">
                        </div>
                        <p><strong><?php echo $item['title']; ?></strong></p>
                        <p><?php echo $item['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>