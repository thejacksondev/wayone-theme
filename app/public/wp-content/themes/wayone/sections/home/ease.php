<?php
// Define the function if it doesn't exist
if (!function_exists('ease_items')) {
    function ease_items()
    {
        return [
            [
                'title' => '1. Upload Your Design',
                'description' => 'PNG, JPG, or export from Canva/Figma — no technical skills needed.',
                'svg' => 'svg-1',
            ],
            [
                'title' => '2. Choose Your Platforms',
                'description' => 'Select where you want to run ads. We’ll handle the specs and sizing.',
                'svg' => 'svg-2',
            ],
            [
                'title' => '3. Download Your Full Ad Set',
                'description' => 'All creatives exported and ready to upload. Editable if needed.',
                'svg' => 'svg-3',
            ],
        ];
    }
}
?>

<section id="3-section" class="ease">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ease-header" data-aos="fade-down">
                    <h3 class="bg-green">Ease Peeze</h3>
                    <h2>How It Works</h2>
                    <p>Upload a single design, and Wayone instantly generates all your ad creatives for Google, Meta, LinkedIn, and more — perfectly sized and optimized.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="ease-grid">
        <?php foreach (ease_items() as $index => $item) : ?>
            <div class="ease-grid__item" data-aos="fade-up" data-aos-delay="<?php echo $index * 200; ?>">
                <div class="ease-grid__item__image">
                    <?php get_template_part('assets/svg/ease/' . $item['svg']); ?>
                </div>
                <div class="ease-grid__item__content">
                    <p><strong data-aos="fade-up" data-aos-delay="<?php echo $index * 200; ?>"><?php echo $item['title']; ?></strong></p>
                    <p><?php echo $item['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>