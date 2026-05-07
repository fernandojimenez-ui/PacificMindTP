<?php
$title  = get_field( 'gm_fi_title',  'option' ) ?: 'Featured In';
$videos = get_field( 'gm_fi_videos', 'option' ) ?: [];
$logos  = get_field( 'gm_fi_logos',  'option' ) ?: [];

if ( ! $videos && ! $logos ) return;
?>

<section class="bg-pmh-bg py-20" aria-label="<?php echo esc_attr( $title ); ?>">
    <div class="ilwu-container">

        <?php if ( $title ) : ?>
        <div class="mb-10 reveal">
            <p class="text-[11px] font-bold tracking-[2.5px] uppercase text-pmh-teal mb-2">Recognition</p>
            <h2 class="text-[32px] font-bold text-pmh-dark leading-tight"><?php echo esc_html( $title ); ?></h2>
            <div class="mt-3 w-12 h-1 rounded-full bg-pmh-teal"></div>
        </div>
        <?php endif; ?>

        <?php if ( $videos ) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <?php foreach ( $videos as $i => $row ) :
                $embed = pmh_video_embed_url( $row['gm_fi_video_url'] ?? '' );
                $label = $row['gm_fi_video_label'] ?? '';
                if ( ! $embed ) continue;
            ?>
            <div class="reveal group bg-white rounded-3xl overflow-hidden shadow-[0_4px_24px_rgba(0,0,0,0.08)] hover:shadow-[0_24px_64px_rgba(51,149,172,0.22)] transition-all duration-500 hover:-translate-y-2" style="transition-delay:<?php echo $i * 0.08; ?>s">
                <div class="p-4 pb-0">
                    <div class="relative w-full rounded-2xl overflow-hidden" style="padding-top:62%;">
                        <iframe
                            class="absolute inset-0 w-full h-full"
                            src="<?php echo esc_url( $embed ); ?>"
                            title="<?php echo esc_attr( $label ); ?>"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            loading="lazy"
                        ></iframe>
                    </div>
                </div>
                <?php if ( $label ) : ?>
                <div class="px-5 py-4 flex items-center gap-2">
                    <span class="block w-1 h-4 rounded-full bg-pmh-teal flex-shrink-0"></span>
                    <p class="text-[13px] font-semibold text-pmh-dark leading-snug"><?php echo esc_html( $label ); ?></p>
                </div>
                <?php else : ?>
                <div class="pb-2"></div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if ( $logos ) : ?>
        <div class="border-t border-[#dde4e8] pt-12">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-x-8 gap-y-6">
                <?php foreach ( $logos as $i => $row ) :
                    $img  = $row['gm_fi_logo_img'] ?? null;
                    if ( ! $img ) continue;
                    $alt  = ! empty( $row['gm_fi_logo_alt'] ) ? $row['gm_fi_logo_alt'] : ( $img['alt'] ?? '' );
                    $link = $row['gm_fi_logo_link'] ?? '';
                ?>
                <div class="reveal flex items-center justify-center" style="transition-delay:<?php echo $i * 0.06; ?>s">
                    <?php if ( $link ) : ?>
                    <a href="<?php echo esc_url( $link ); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center">
                    <?php endif; ?>
                        <img
                            src="<?php echo esc_url( $img['url'] ); ?>"
                            alt="<?php echo esc_attr( $alt ); ?>"
                            loading="lazy"
                            class="h-10 w-auto max-w-[140px] object-contain transition-transform duration-300 hover:scale-110"
                        >
                    <?php if ( $link ) : ?>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>
