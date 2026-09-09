<?php
session_start();
include 'config/data.php';

// Prepare theme state if we needed it PHP-side, but it's handled via JS mostly.
$theme = 'light';
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <!-- HERO SECTION -->
    <section id="home" class="hero section bg-s1">
        <div class="container hero-content">
            <div class="hero-text reveal">
                <p class="greeting">Hi, I'm</p>
                <h1>Januar Putra Pamungkas</h1>
                <div class="hero-role"></div>
                <p class="hero-desc">
                    Saya mengembangkan solusi digital melalui perpaduan desain yang berorientasi pada pengguna, pengembangan aplikasi web, dan teknologi modern.
                </p>
                <div class="hero-actions">
                    <a href="#projects" class="btn btn-primary">View My Work</a>
                    </a>
                </div>
                <div class="hero-social">
                    <a href="https://www.linkedin.com/in/januar-putra-pamungkas" target="_blank" class="social-icon" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                    <a href="https://www.instagram.com/januarptra?igsi=NG5hejdmaWZsMzFt&utm_source=qr" target="_blank" class="social-icon" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <div class="hero-shape"></div>
                <!-- Using a nice elegant placeholder -->
                <img src="assets/images/foto.png" alt="Januar Putra Pamungkas" class="hero-image">
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="section bg-s2">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title">About Me</h2>
                <div class="text-accent" style="width: 60px; height: 4px; background: var(--accent); margin: 0 auto; border-radius: 2px;"></div>
            </div>
            
            <div class="about-grid reveal">
                <div class="about-text">
                    <p>Saya memiliki latar belakang pendidikan di bidang Sistem Informasi dengan ketertarikan pada analisis dan pengembangan sistem, UI/UX Design, Web Development, database, dan teknologi kecerdasan buatan.</p>
                    <p style="margin-top: 16px;">Saya senang mempelajari teknologi baru dan mengembangkan solusi digital yang memiliki tampilan menarik, mudah digunakan, serta sesuai dengan kebutuhan pengguna.</p>
                </div>
                
                <div class="about-cards">
                    <div class="about-card">
                        <h4>Education</h4>
                        <p>Information Systems</p>
                    </div>
                    <div class="about-card">
                        <h4>Focus</h4>
                        <p>UI/UX & Web Dev</p>
                    </div>
                    <div class="about-card">
                        <h4>Interest</h4>
                        <p>Artificial Intelligence</p>
                    </div>
                    <div class="about-card">
                        <h4>Location</h4>
                        <p>Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT I DO / SERVICES SECTION -->
    <section class="section bg-s3">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title">What I Do</h2>
                <div class="text-accent" style="width: 60px; height: 4px; background: var(--accent); margin: 0 auto; border-radius: 2px;"></div>
            </div>
            
            <div class="services-grid reveal">
                <?php foreach($services as $service): ?>
                <div class="service-card">
                    <div class="service-icon">
                        <?php if (isset($service['image']) && file_exists($service['image'])): ?>
                            <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
                        <?php else: ?>
                            <i data-lucide="<?php echo $service['icon']; ?>"></i>
                        <?php endif; ?>
                    </div>
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SKILLS SECTION -->
    <section id="skills" class="section bg-s4">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title">My Skills</h2>
                <div class="text-accent" style="width: 60px; height: 4px; background: var(--accent); margin: 0 auto; border-radius: 2px;"></div>
            </div>
            
            <div class="skills-container reveal">
                <?php foreach($skills as $category => $items): ?>
                <div class="skill-group">
                    <h3><?php echo $category; ?></h3>
                    <div class="skill-tags">
                        <?php foreach($items as $item): ?>
                        <span class="skill-badge"><?php echo $item; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE & EDUCATION SECTION -->
    <section id="experience" class="section bg-s5">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title">Experience & Education</h2>
                <div class="text-accent" style="width: 60px; height: 4px; background: var(--accent); margin: 0 auto; border-radius: 2px;"></div>
            </div>

            <div class="timeline reveal">
                <!-- Experience -->
                <?php foreach($experiences as $exp): ?>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-date"><?php echo $exp['date']; ?></span>
                        <h3 class="timeline-title"><?php echo $exp['position']; ?></h3>
                        <p class="timeline-subtitle"><?php echo $exp['company']; ?></p>
                        <p class="timeline-desc"><?php echo $exp['description']; ?></p>
                        <div class="tech-stack" style="margin: 0; padding-top: 12px; border-top: 1px solid var(--border);">
                            <?php foreach($exp['tools'] as $tool): ?>
                            <span class="tech-tag"><?php echo $tool; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php if(isset($exp['images']) && !empty($exp['images'])): ?>
                        <div class="timeline-gallery">
                            <?php foreach($exp['images'] as $img): ?>
                            <img src="<?php echo $img; ?>" alt="Dokumentasi Kegiatan">
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- Education -->
                <?php foreach($education as $edu): ?>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-date"><?php echo $edu['date']; ?></span>
                        <h3 class="timeline-title"><?php echo $edu['program']; ?></h3>
                        <p class="timeline-subtitle"><?php echo $edu['institution']; ?></p>
                        <p class="timeline-desc"><?php echo $edu['description']; ?></p>
                        <?php if(!empty($edu['achievements'])): ?>
                            <ul style="list-style: disc; margin-left: 20px; font-size: 0.95rem; color: var(--text-secondary);">
                                <?php foreach($edu['achievements'] as $ach): ?>
                                <li><?php echo $ach; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if(isset($edu['images']) && !empty($edu['images'])): ?>
                        <div class="timeline-gallery">
                            <?php foreach($edu['images'] as $img): ?>
                            <img src="<?php echo $img; ?>" alt="Dokumentasi Pendidikan">
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
                
                <!-- Activities -->
                <?php foreach($activities as $act): ?>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-date"><?php echo $act['date']; ?></span>
                        <h3 class="timeline-title"><?php echo $act['role']; ?></h3>
                        <p class="timeline-subtitle"><?php echo $act['organization']; ?></p>
                        <p class="timeline-desc"><?php echo $act['description']; ?></p>
                        <div class="tech-stack" style="margin: 0; padding-top: 12px; border-top: 1px solid var(--border);">
                            <?php foreach($act['skills'] as $skill): ?>
                            <span class="tech-tag"><?php echo $skill; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php if(isset($act['images']) && !empty($act['images'])): ?>
                        <div class="timeline-gallery">
                            <?php foreach($act['images'] as $img): ?>
                            <img src="<?php echo $img; ?>" alt="Dokumentasi Aktivitas">
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- WEB DEVELOPMENT SECTION -->
    <section id="webdev" class="section bg-s7">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title">Web Development & Deployment</h2>
                <p class="section-subtitle">Building functional web applications and bringing them to life.</p>
            </div>

            <div class="web-projects reveal">
                <?php foreach($web_projects as $web): ?>
                <div class="web-card">
                    <div class="web-img-wrapper">
                        <img src="<?php echo htmlspecialchars($web['image']); ?>" alt="<?php echo htmlspecialchars($web['title']); ?>" class="web-img">
                    </div>
                    <div class="web-info">
                        <h3><?php echo $web['title']; ?></h3>
                        <p style="color: var(--text-secondary); margin-bottom: 8px;"><strong>Role:</strong> <?php echo $web['role']; ?> | <strong>Deployment:</strong> <?php echo $web['deployment']; ?></p>
                        <p style="color: var(--text-secondary); margin-bottom: 24px;"><?php echo $web['description']; ?></p>
                        
                        <h4 style="font-size: 1rem; margin-bottom: 8px;">Tech Stack:</h4>
                        <div class="tech-stack" style="margin-top: 0;">
                            <?php foreach($web['tech_stack'] as $tech): ?>
                            <span class="tech-tag"><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- AI & MACHINE LEARNING SECTION -->
    <section id="projects" class="section bg-s8">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title">AI & Machine Learning</h2>
                <p class="section-subtitle">Exploring artificial intelligence through practical projects.</p>
            </div>

            <?php foreach($ai_projects as $ai): ?>
            <div class="web-card ai-project-card reveal">
                <div class="web-info">
                    <h3><?php echo $ai['title']; ?></h3>
                    <p style="color: var(--text-secondary); margin-bottom: 24px;"><?php echo $ai['description']; ?></p>
                    
                    <h4 style="font-size: 1rem; margin-bottom: 8px;">Technology:</h4>
                    <div class="tech-stack" style="margin-top: 0; margin-bottom: 24px;">
                        <?php foreach($ai['tech_stack'] as $tech): ?>
                        <span class="tech-tag"><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    </div>

                    <h4 style="font-size: 1rem; margin-bottom: 12px;">Matrix:</h4>
                    <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                        <?php foreach($ai['metrics'] as $label => $value): ?>
                        <div style="background-color: var(--bg-primary); padding: 12px 24px; border-radius: var(--radius-md); border: 1px solid var(--border); text-align: center;">
                            <span style="display: block; font-size: 1.25rem; font-weight: 700; color: var(--accent);"><?php echo $value; ?></span>
                            <span style="font-size: 0.85rem; color: var(--text-secondary);"><?php echo $label; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="web-img-wrapper">
                    <img src="assets/images/daun2.png" alt="<?php echo $ai['title']; ?>" class="web-img">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="section bg-s9">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title">Let's Work Together</h2>
                <p class="section-subtitle">Have a project, collaboration, or opportunity? Feel free to get in touch.</p>
            </div>

            <div class="contact-grid reveal">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p>Saya terbuka untuk peluang kolaborasi dan pekerjaan di bidang UI/UX Design dan Web Development.</p>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i data-lucide="mail"></i></div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>januar050104@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i data-lucide="phone"></i></div>
                        <div class="contact-text">
                            <h4>Phone</h4>
                            <p>087872156496</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i data-lucide="map-pin"></i></div>
                        <div class="contact-text">
                            <h4>Location</h4>
                            <p>Jakarta,Indonesia</p>
                        </div>
                    </div>
                </div>

                <div class="contact-thank-you">
                    <div class="thank-you-icon"><i data-lucide="sparkles"></i></div>
                    <p class="thank-you-eyebrow">Thank you</p>
                    <h3>Thank you for reaching out.</h3>
                    <p>Setiap ide, kolaborasi, dan kesempatan baru sangat berarti. Saya menantikan percakapan yang bermakna bersama Anda.</p>
                    <div class="thank-you-line"></div>
                    <span>Januar Putra Pamungkas</span>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
