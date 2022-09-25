<?php
get_header();
$link_post = get_the_permalink();
$typeLink = (!wp_is_mobile()) ? 'https://web.whatsapp.com/send?text=' : 'https://api.whatsapp.com/send?text=';
$autor = get_field('author');
?>

<div class="second-section">
    <section class="center">
        <div class="lower-content">
            <div class="posts content-archive format-post">
            <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<i class="wrapper-breadcrumb"><span class="breadcrumb">', '</span></i>');
                }
                $u_time = get_the_time('U');
                $u_modified_time = get_the_modified_time('U');
                ?>
                <h1><?php the_title(); ?></h1>


                
                <span class="date-post"><i>Publicado em:</i>
                    <?php
                    the_time('d/m/Y');
                    if ($u_modified_time >= $u_time + 86400) {
                        echo " | <i style='font-style:italic'>Última modificação em ";
                        the_modified_time('d/m/Y');
                        echo "</i>";
                    }
                    ?>

                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                    <?php if($autor == true){
							get_template_part( 'content/content', 'author' );
						} ?>
                    <hr>
                    <div class="group-share">
                        <h2>Compartilhe este artigo</h2>
                        <div class="share-small">
                            <ul class="share share-social">
                                <div class="center share-social__wrapper">
                                    <!-- WhatsApp -->
                                <li>
                                    <?php echo ($link_post != '' ? '<a class="icon-whatsapp" target="_blank" href="' . $typeLink . $link_post . '" title="WhatsApp">Whatsapp</a>' : ''); ?>
                                </li>

                                <!-- Facebook -->
                                <li>
                                    <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank" title="Facebook">
                                        Facebook
                                    </a>
                                </li>

                                <!-- LinkedIn -->
                                <li>
                                    <a class="icon-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_the_permalink(); ?>/&title=<?php echo get_the_title(); ?>&summary=&source=" target="_blank" title="LinkedIn">
                                        LinkedIn
                                    </a>
                                </li>

                                <textarea name="" id="to-copy-2" style="width:1px;height:1px;opacity:0;padding:0;position: absolute;" class="wrapper-copy"><?php the_permalink(); ?></textarea>
                                <li id="copy-2" class="icon-link">Copiar Link</li>
                                </div>
                            </ul>
                        </div>
                    </div>

         
                    <?php comments_template('', true);?>
            </div>

            <?php get_sidebar(); ?>

        </div>

    </section>
</div>

<script type="text/javascript">
    var toCopy2 = document.getElementById('to-copy-2'),
        btnCopy2 = document.getElementById('copy-2');
    btnCopy2.addEventListener('click', function(e) {
        e.preventDefault();
        toCopy2.select();
        if (document.execCommand('copy')) {
            btnCopy2.innerHTML = 'Link Copiado âœ“';
            btnCopy2.classList.add('copied');
            var temp = setInterval(function() {
                btnCopy2.classList.remove('copied');
                clearInterval(temp);
            }, 800);
        } else {
            console.info('document.execCommand went wrongâ€¦')
        }
        return false;
    });
</script>

<?php get_footer(); ?>