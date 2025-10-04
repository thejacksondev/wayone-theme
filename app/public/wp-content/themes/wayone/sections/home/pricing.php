<?php
// Define the function if it doesn't exist
if (!function_exists('pricing_items')) {
    function pricing_items()
    {
        return [
            [
                'title' => 'Starter',
                'title_class' => 'bg-red',
                'description' => 'Perfect for small businesses',
                'price' => '$19<span>/month</span>',
                'features' => ['10 Designs/Month', 'All Plataform Formats', 'Basic Templates']
            ],
            [
                'title' => 'Pro',
                'title_class' => 'bg-orange',
                'description' => 'Perfect growing marketing teams',
                'price' => '$49<span>/month</span>',
                'features' => ['50 Designs/Month', 'Brand Kits & Presets', 'AI-powered CTAs', 'Priority Support']
            ],
            [
                'title' => 'Agency',
                'title_class' => 'bg-yellow',
                'description' => 'For agencies and large teams',
                'price' => '$99<span>/month</span>',
                'features' => ['Unlimited Designs', 'Brand Kits & Presets', 'AI-powered CTAs', 'Priority Rendering', 'Priority Support']
            ],
        ];
    }
}
?>

<section id="4-section" class="pricing">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pricing-header" data-aos="fade-down">
                    <h3 class="bg-yellow">Pricing</h3>
                    <h2> Explore Plans</h2>
                    <ul class="pricing-header__list">
                        <li>Save Time</li>
                        <li>Stay On Brand</li>
                        <li>Launch Faster</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pricing-items">
        <?php foreach (pricing_items() as $index => $item) : ?>
            <div class="pricing-item" data-aos="fade-up" data-aos-delay="<?php echo $index * 200; ?>">
                <h3>
                    <span class="<?php echo $item['title_class']; ?>">
                        <?php echo $item['title']; ?>
                    </span>
                </h3>
                <p class="pricing-item__description"><?php echo $item['description']; ?></p>
                <p class="pricing-item__price"><?php echo $item['price']; ?></p>
                <ul class="pricing-item__list">
                    <?php foreach ($item['features'] as $feature) : ?>
                        <li><?php echo $feature; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</section>