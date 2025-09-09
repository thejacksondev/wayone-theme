<?php
// Define the function if it doesn't exist
if (!function_exists('ease_items')) {
    function ease_items()
    {
        return [
            [
                'title' => '1. Upload Your Design',
                'description' => 'PNG, JPG, or export from Canva/Figma — no technical skills needed.',
            ],
            [
                'title' => '2. Choose Your Platforms',
                'description' => 'Select where you want to run ads. We’ll handle the specs and sizing.',
            ],
            [
                'title' => '3. Download Your Full Ad Set',
                'description' => 'All creatives exported and ready to upload. Editable if needed.',
            ],
        ];
    }
}
?>

<section id="3-section" class="ease">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ease-header">
                    <h3 class="bg-green">Ease Peeze</h3>
                    <h2>How It Works</h2>
                    <p>Upload a single design, and Wayone instantly generates all your ad creatives for Google, Meta, LinkedIn, and more — perfectly sized and optimized.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach (ease_items() as $item) : ?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="ease-item">
                        <div class="ease-item__image">
                            <img src="https://placehold.co/43x43" alt="Placeholder image" class="img-responsive">
                        </div>
                        <div class="ease-item__content">
                            <p><strong><?php echo $item['title']; ?></strong></p>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>