<?php

namespace Dorguzen\Views;

class codingLessons extends \Dorguzen\Core\DGZ_HtmlView
{
    public function show(array $viewModel = []): void
    {
        $base = $this->controller->config->getFileRootPath();
        $this->addMetadata([
            '<title>Coding Lessons — No Limit Media | Learn to Code in Canada</title>',
            '<meta name="description" content="One-on-one and small group coding lessons for young people and students. Learn HTML, CSS, JavaScript, and more — online, flexible, and tailored to your level.">',
            '<meta property="og:title" content="Coding Lessons — No Limit Media">',
            '<meta property="og:type" content="website">',
        ]);
    ?>

    <!-- ══ PAGE HERO ══════════════════════════════════════════════ -->
    <section class="nlm-page-hero" style="padding-top: calc(var(--nlm-header-h) + 50px);">
        <div class="nlm-page-hero-content container">
            <span class="nlm-label" style="color:rgba(255,255,255,.7);">Other Services</span>
            <h1>Coding Lessons</h1>
            <p>There has never been a more exciting time to learn to code. The tools are better, the opportunities are greater, and the demand for people who can build things with software has never been higher. We teach the skills that matter — starting from the very beginning.</p>
            <div class="nlm-breadcrumb">
                <a href="<?= $base ?>">Home</a>
                <span>/</span>
                <a href="<?= $base ?>services">Services</a>
                <span>/</span>
                <span style="color:#fff;">Coding Lessons</span>
            </div>
        </div>
    </section>

    <!-- ══ EXCITING TIME INTRO ═══════════════════════════════════ -->
    <section class="nlm-section-sm" style="background:linear-gradient(135deg, rgba(23,195,245,.08) 0%, rgba(247,59,59,.06) 100%); border-bottom:1px solid var(--nlm-border);">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="flex-shrink:0; width:48px; height:48px; border-radius:12px; background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-red)); display:flex; align-items:center; justify-content:center; margin-top:.2rem;">
                            <i class="fas fa-fire" style="color:#fff; font-size:1.2rem;"></i>
                        </div>
                        <div>
                            <h3 style="color:var(--nlm-white); font-weight:800; margin-bottom:.6rem;">The Best Time to Start Is Right Now</h3>
                            <p style="color:var(--nlm-text); font-size:1.05rem; line-height:1.8; margin:0;">
                                We are living through the most transformative technological moment in history. AI, automation, and the digital economy are reshaping every industry. The people who understand how software works — who can read, write, and reason in code — will be the ones who shape what comes next. Starting today, even as a complete beginner, puts you ahead of most of the world.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="display:flex; flex-direction:column; gap:.75rem;">
                        <div style="display:flex; align-items:center; gap:.75rem; background:rgba(255,255,255,.05); border:1px solid var(--nlm-border); border-radius:10px; padding:.75rem 1rem;">
                            <i class="fas fa-check-circle" style="color:var(--nlm-blue); font-size:1.1rem; flex-shrink:0;"></i>
                            <span style="color:var(--nlm-text); font-size:.92rem; font-weight:600;">No experience needed — zero to builder</span>
                        </div>
                        <div style="display:flex; align-items:center; gap:.75rem; background:rgba(255,255,255,.05); border:1px solid var(--nlm-border); border-radius:10px; padding:.75rem 1rem;">
                            <i class="fas fa-check-circle" style="color:var(--nlm-blue); font-size:1.1rem; flex-shrink:0;"></i>
                            <span style="color:var(--nlm-text); font-size:.92rem; font-weight:600;">Build real websites from lesson one</span>
                        </div>
                        <div style="display:flex; align-items:center; gap:.75rem; background:rgba(255,255,255,.05); border:1px solid var(--nlm-border); border-radius:10px; padding:.75rem 1rem;">
                            <i class="fas fa-check-circle" style="color:var(--nlm-blue); font-size:1.1rem; flex-shrink:0;"></i>
                            <span style="color:var(--nlm-text); font-size:.92rem; font-weight:600;">Skills that open doors in any career</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ WHY CODING ════════════════════════════════════════════ -->
    <section class="nlm-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label">The Case for Coding</span>
                <h2 class="nlm-heading">Why Every Young Person Should <span class="nlm-gradient-text">Learn to Code</span></h2>
                <p class="nlm-subheading">Coding is not just a career skill — it is a way of thinking. The children and students who learn it today will have a decisive advantage tomorrow.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem; height:100%;">
                        <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-blue-dark));display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
                            <i class="fas fa-brain" style="color:#fff;font-size:1.4rem;"></i>
                        </div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.75rem;">Logical Thinking</h5>
                        <p style="color:var(--nlm-text);font-size:.92rem;line-height:1.7;margin-bottom:.9rem;">Coding teaches children to break big problems into small, manageable steps — a skill that transfers directly to maths, science, and real-world decision making.</p>
                        <span style="display:inline-flex;align-items:center;gap:.4rem;background:rgba(23,195,245,.12);border:1px solid rgba(23,195,245,.25);border-radius:20px;padding:.25rem .75rem;font-size:.78rem;font-weight:700;color:var(--nlm-blue);">
                            <i class="fas fa-lightbulb"></i> Problem solving for life
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem; height:100%; border-color:var(--nlm-red);">
                        <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,var(--nlm-red),var(--nlm-red-dark));display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
                            <i class="fas fa-bolt" style="color:#fff;font-size:1.4rem;"></i>
                        </div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.75rem;">Brain Development</h5>
                        <p style="color:var(--nlm-text);font-size:.92rem;line-height:1.7;margin-bottom:.9rem;">Learning to code exercises both sides of the brain — creative thinking when designing a solution and analytical thinking when debugging it. It is one of the best mental workouts available.</p>
                        <span style="display:inline-flex;align-items:center;gap:.4rem;background:rgba(247,59,59,.82);border:1px solid var(--nlm-red);border-radius:20px;padding:.25rem .75rem;font-size:.78rem;font-weight:700;color:#fff;">
                            <i class="fas fa-fire"></i> Sharpens both creativity &amp; logic
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem; height:100%;">
                        <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-red));display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
                            <i class="fas fa-rocket" style="color:#fff;font-size:1.4rem;"></i>
                        </div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.75rem;">Future-Ready Skills</h5>
                        <p style="color:var(--nlm-text);font-size:.92rem;line-height:1.7;margin-bottom:.9rem;">Software and technology underpin virtually every industry. Young people who can code will enter the job market with skills that are in demand now — and will only become more valuable over time.</p>
                        <span style="display:inline-flex;align-items:center;gap:.4rem;background:rgba(23,195,245,.12);border:1px solid rgba(23,195,245,.25);border-radius:20px;padding:.25rem .75rem;font-size:.78rem;font-weight:700;color:var(--nlm-blue);">
                            <i class="fas fa-chart-line"></i> Demand only grows
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem; height:100%; border-color:var(--nlm-red);">
                        <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-red));display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
                            <i class="fas fa-globe" style="color:#fff;font-size:1.4rem;"></i>
                        </div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.75rem;">Thriving in a Digital World</h5>
                        <p style="color:var(--nlm-text);font-size:.92rem;line-height:1.7;margin-bottom:.9rem;">We live online. Understanding how websites, apps, and software are built gives young people the confidence to create, not just consume — to shape the digital world rather than be shaped by it.</p>
                        <span style="display:inline-flex;align-items:center;gap:.4rem;background:rgba(247,59,59,.82);border:1px solid var(--nlm-red);border-radius:20px;padding:.25rem .75rem;font-size:.78rem;font-weight:700;color:#fff;">
                            <i class="fas fa-star"></i> Creator, not consumer
                        </span>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#cl-register" class="nlm-btn nlm-btn-red">
                    <i class="fas fa-pen"></i> Register / Enquire
                </a>
            </div>
        </div>
    </section>

    <!-- ══ HOW IT WORKS ══════════════════════════════════════════ -->
    <section class="nlm-section" style="background:var(--nlm-dark-2); border-top:1px solid var(--nlm-border); border-bottom:1px solid var(--nlm-border);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="nlm-label red">How the Programme Works</span>
                    <h2 class="nlm-heading">Flexible, Online, <span class="nlm-gradient-text">Built Around You</span></h2>
                    <p style="color:var(--nlm-text); margin-bottom:1.25rem; font-size:1rem;">
                        All lessons are delivered online via Microsoft Teams, making them accessible to students anywhere in Canada and beyond. There is no fixed timetable — sessions are scheduled around the student's availability, whether that means weekday evenings, weekend mornings, or intensive blocks during school holidays.
                    </p>
                    <p style="color:var(--nlm-text); margin-bottom:1.75rem; font-size:1rem;">
                        We typically run one to two sessions per week, each lasting between 60 and 90 minutes. Progress is entirely self-paced: students move on when they are ready, not when the calendar says so.
                    </p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div style="display:flex;align-items:flex-start;gap:.75rem;">
                                <div style="width:36px;height:36px;border-radius:8px;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-blue-dark));display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                    <i class="fas fa-video" style="color:#fff;font-size:.9rem;"></i>
                                </div>
                                <div>
                                    <div style="color:var(--nlm-white);font-weight:700;font-size:.9rem;">100% Online</div>
                                    <div style="color:var(--nlm-text);font-size:.82rem;">Via Microsoft Teams</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="display:flex;align-items:flex-start;gap:.75rem;">
                                <div style="width:36px;height:36px;border-radius:8px;background:linear-gradient(135deg,var(--nlm-red),var(--nlm-red-dark));display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                    <i class="fas fa-calendar-check" style="color:#fff;font-size:.9rem;"></i>
                                </div>
                                <div>
                                    <div style="color:var(--nlm-white);font-weight:700;font-size:.9rem;">Flexible Schedule</div>
                                    <div style="color:var(--nlm-text);font-size:.82rem;">1–2 sessions per week</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="display:flex;align-items:flex-start;gap:.75rem;">
                                <div style="width:36px;height:36px;border-radius:8px;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-red));display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                    <i class="fas fa-user-graduate" style="color:#fff;font-size:.9rem;"></i>
                                </div>
                                <div>
                                    <div style="color:var(--nlm-white);font-weight:700;font-size:.9rem;">Self-Paced</div>
                                    <div style="color:var(--nlm-text);font-size:.82rem;">Move on when ready</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="display:flex;align-items:flex-start;gap:.75rem;">
                                <div style="width:36px;height:36px;border-radius:8px;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-blue-dark));display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                    <i class="fas fa-users" style="color:#fff;font-size:.9rem;"></i>
                                </div>
                                <div>
                                    <div style="color:var(--nlm-white);font-weight:700;font-size:.9rem;">1-on-1 or Small Group</div>
                                    <div style="color:var(--nlm-text);font-size:.82rem;">Personalised attention</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nlm-stat-card" style="padding:2.5rem; border-color:var(--nlm-blue);">
                        <div style="display:inline-flex;align-items:center;gap:.5rem;background:rgba(23,195,245,.12);border:1px solid rgba(23,195,245,.3);border-radius:20px;padding:.3rem .9rem;font-size:.75rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:var(--nlm-blue);margin-bottom:1.25rem;">
                            <i class="fas fa-sun"></i> Summer Holiday Intensives
                        </div>
                        <h4 style="color:var(--nlm-white);margin-bottom:1rem;">Make the Most of the <span class="nlm-gradient-text">School Break</span></h4>
                        <p style="color:var(--nlm-text);font-size:.95rem;line-height:1.8;margin-bottom:1.25rem;">
                            School holidays — especially the long summer break — are the ideal time to start. With no homework or early mornings to worry about, students can dedicate real time to learning and make significant progress in just a few weeks.
                        </p>
                        <p style="color:var(--nlm-text);font-size:.95rem;line-height:1.8;">
                            Many students who begin during the summer arrive back at school in September with a confidence and curiosity around technology that sets them apart from their peers — and often sparks a lasting passion.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#cl-register" class="nlm-btn nlm-btn-red">
                    <i class="fas fa-pen"></i> Register / Enquire
                </a>
            </div>
        </div>
    </section>

    <!-- ══ CURRICULUM ════════════════════════════════════════════ -->
    <section class="nlm-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label">What Students Learn</span>
                <h2 class="nlm-heading">Three Languages. <span class="nlm-gradient-text">Every Website on Earth.</span></h2>
                <p class="nlm-subheading" style="max-width:700px;">You may have heard of dozens of programming languages — Python, Java, C++, Rust, Go. But here is the truth that most people outside the industry don't know:</p>
            </div>

            <!-- Core 3 explainer -->
            <div style="background:linear-gradient(135deg, rgba(23,195,245,.07), rgba(247,59,59,.05)); border:1px solid var(--nlm-border); border-radius:var(--nlm-radius); padding:2.5rem; margin-bottom:3.5rem;">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <div style="display:flex;align-items:center;gap:.75rem;margin-bottom:1rem;">
                            <i class="fas fa-exclamation-circle" style="color:var(--nlm-blue);font-size:1.4rem;flex-shrink:0;"></i>
                            <h4 style="color:var(--nlm-white);margin:0;font-weight:800;">The Core Three — And Why They Come First</h4>
                        </div>
                        <p style="color:var(--nlm-text);font-size:1rem;line-height:1.85;margin-bottom:1rem;">
                            <strong style="color:var(--nlm-white);">HTML, CSS, and JavaScript</strong> are the three languages that power every single website and web application on the internet — without exception. No matter what stack a developer works in, no matter what language they use on the server, these three are unavoidable. They are the universal foundation.
                        </p>
                        <p style="color:var(--nlm-text);font-size:1rem;line-height:1.85;margin:0;">
                            Novices often ask "which language should I learn?" and get overwhelmed by choices. The answer is always the same for anyone starting on the web: <strong style="color:var(--nlm-white);">start with HTML, then CSS, then JavaScript</strong>. They build on each other naturally, the feedback is instant (you see results in your browser immediately), and they give you a platform to branch into any other language afterwards.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div style="display:flex;flex-direction:column;gap:.85rem;">
                            <div style="display:flex;align-items:center;gap:1rem;background:rgba(255,255,255,.04);border:1px solid rgba(23,195,245,.2);border-radius:10px;padding:1rem 1.25rem;">
                                <div style="width:42px;height:42px;border-radius:10px;background:rgba(23,195,245,.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:.7rem;font-weight:900;color:var(--nlm-blue);">HTML</div>
                                <div>
                                    <div style="color:var(--nlm-white);font-weight:700;font-size:.92rem;">Structure</div>
                                    <div style="color:var(--nlm-text);font-size:.82rem;">The skeleton of every web page</div>
                                </div>
                            </div>
                            <div style="display:flex;align-items:center;gap:1rem;background:rgba(255,255,255,.04);border:1px solid rgba(247,59,59,.2);border-radius:10px;padding:1rem 1.25rem;">
                                <div style="width:42px;height:42px;border-radius:10px;background:rgba(247,59,59,.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:.7rem;font-weight:900;color:var(--nlm-red);">CSS</div>
                                <div>
                                    <div style="color:var(--nlm-white);font-weight:700;font-size:.92rem;">Style</div>
                                    <div style="color:var(--nlm-text);font-size:.82rem;">Design, colour, layout, animation</div>
                                </div>
                            </div>
                            <div style="display:flex;align-items:center;gap:1rem;background:rgba(255,255,255,.04);border:1px solid rgba(23,195,245,.2);border-radius:10px;padding:1rem 1.25rem;">
                                <div style="width:42px;height:42px;border-radius:10px;background:rgba(23,195,245,.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:.65rem;font-weight:900;color:var(--nlm-blue);">JS</div>
                                <div>
                                    <div style="color:var(--nlm-white);font-weight:700;font-size:.92rem;">Behaviour</div>
                                    <div style="color:var(--nlm-text);font-size:.82rem;">Interactivity, logic, dynamic content</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Curriculum steps -->
            <?php
            $steps = [
                [
                    'num'   => '01',
                    'lang'  => 'HTML',
                    'label' => 'The Foundation',
                    'badge' => 'Start here',
                    'red'   => false,
                    'desc'  => 'HTML (HyperText Markup Language) is the skeleton of every website on the internet. Students learn to structure content — headings, paragraphs, links, images, lists, forms — and leave this stage with a real, working web page they built from scratch.',
                    'highlight' => 'You will see your first real web page by the end of lesson one.',
                ],
                [
                    'num'   => '02',
                    'lang'  => 'CSS',
                    'label' => 'Making It Look Great',
                    'badge' => 'Design & layout',
                    'red'   => true,
                    'desc'  => 'CSS (Cascading Style Sheets) is the language that controls how everything looks — colours, fonts, spacing, layouts, animations. By the end of this stage, the student\'s web page will be visually polished and they will understand why design choices matter.',
                    'highlight' => 'By this stage, your site already looks professional.',
                ],
                [
                    'num'   => '03',
                    'lang'  => 'JavaScript',
                    'label' => 'Bringing It to Life',
                    'badge' => 'Most popular language on Earth',
                    'red'   => false,
                    'desc'  => 'JavaScript is the most widely used programming language in the world — and it runs directly in the browser. It makes websites interactive: buttons that do things, forms that validate, menus that open and close, data that updates without reloading. This stage introduces real programming logic: variables, functions, loops, and events.',
                    'highlight' => 'JavaScript is the language behind virtually every interactive website you have ever used.',
                ],
                [
                    'num'   => '04',
                    'lang'  => 'Server-Side',
                    'label' => 'Optional Advanced Track',
                    'badge' => 'Choose your path',
                    'red'   => true,
                    'desc'  => 'Students who complete the core curriculum and want to go further can explore server-side development. We offer instruction in Node.js, PHP, Python, Java, and Go. This stage introduces databases, user authentication, APIs, and the architecture behind full web applications. The student\'s interests and goals guide which language we pursue.',
                    'highlight' => 'Many developers go on to specialise in one of these — and earn very well doing it.',
                ],
            ];
            ?>

            <div class="row g-4">
                <?php foreach ($steps as $step): ?>
                <div class="col-lg-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem; height:100%; <?= $step['red'] ? 'border-color:var(--nlm-red);' : '' ?>">
                        <div style="display:flex; align-items:flex-start; gap:1.25rem;">
                            <div style="flex-shrink:0; width:56px; height:56px; border-radius:12px; background:<?= $step['red'] ? 'linear-gradient(135deg,var(--nlm-red),var(--nlm-red-dark))' : 'linear-gradient(135deg,var(--nlm-blue),var(--nlm-blue-dark))' ?>; display:flex; align-items:center; justify-content:center; font-size:.7rem; font-weight:900; letter-spacing:.04em; color:rgba(255,255,255,.7);"><?= $step['num'] ?></div>
                            <div style="flex:1;">
                                <div style="display:flex;align-items:center;gap:.5rem;flex-wrap:wrap;margin-bottom:.3rem;">
                                    <div style="font-size:.7rem; font-weight:800; letter-spacing:.1em; text-transform:uppercase; color:<?= $step['red'] ? 'var(--nlm-red)' : 'var(--nlm-blue)' ?>;"><?= $step['label'] ?></div>
                                    <span style="background:<?= $step['red'] ? 'rgba(247,59,59,.82)' : 'rgba(23,195,245,.15)' ?>;border:1px solid <?= $step['red'] ? 'var(--nlm-red)' : 'rgba(23,195,245,.3)' ?>;border-radius:20px;padding:.1rem .6rem;font-size:.7rem;font-weight:700;color:<?= $step['red'] ? '#fff' : 'var(--nlm-blue)' ?>;"><?= $step['badge'] ?></span>
                                </div>
                                <h5 style="color:var(--nlm-white); margin-bottom:.75rem;"><?= $step['lang'] ?></h5>
                                <p style="color:var(--nlm-text); font-size:.9rem; line-height:1.78; margin-bottom:1rem;"><?= $step['desc'] ?></p>
                                <div style="display:flex;align-items:flex-start;gap:.5rem;background:rgba(255,255,255,.04);border-left:3px solid <?= $step['red'] ? 'var(--nlm-red)' : 'var(--nlm-blue)' ?>;padding:.65rem .85rem;border-radius:0 6px 6px 0;">
                                    <i class="fas fa-info-circle" style="color:<?= $step['red'] ? 'var(--nlm-red)' : 'var(--nlm-blue)' ?>;margin-top:.15rem;flex-shrink:0;"></i>
                                    <span style="color:var(--nlm-white);font-size:.85rem;font-weight:600;font-style:italic;"><?= $step['highlight'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-5">
                <a href="#cl-register" class="nlm-btn nlm-btn-red">
                    <i class="fas fa-pen"></i> Register / Enquire
                </a>
            </div>
        </div>
    </section>

    <!-- ══ WHO IS THIS FOR ═══════════════════════════════════════ -->
    <section class="nlm-section" style="background:var(--nlm-dark-2); border-top:1px solid var(--nlm-border); border-bottom:1px solid var(--nlm-border);">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label red">Who Is This For?</span>
                <h2 class="nlm-heading">Anyone Who Wants to <span class="nlm-gradient-text">Start Building</span></h2>
                <p class="nlm-subheading">There is no age limit and no prior experience required. If you are curious, you are ready.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card" style="text-align:left; height:100%;">
                        <div class="nlm-service-icon"><i class="fas fa-child"></i></div>
                        <h5 class="nlm-service-title">Young Learners <span style="font-size:.78rem;font-weight:600;opacity:.7;">(Ages 10+)</span></h5>
                        <p class="nlm-service-desc" style="margin-bottom:1rem;">Perfect as a first introduction to technology. We keep things visual, fun, and hands-on — no dry theory, just building real things from day one. Children at this age absorb concepts quickly and develop an instinct for problem-solving that stays with them.</p>
                        <span style="display:inline-flex;align-items:center;gap:.4rem;background:rgba(23,195,245,.12);border:1px solid rgba(23,195,245,.25);border-radius:20px;padding:.25rem .75rem;font-size:.78rem;font-weight:700;color:var(--nlm-blue);">
                            <i class="fas fa-star"></i> Most popular age group to start
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card red" style="text-align:left; height:100%;">
                        <div class="nlm-service-icon"><i class="fas fa-user-graduate"></i></div>
                        <h5 class="nlm-service-title">Students &amp; Teenagers</h5>
                        <p class="nlm-service-desc" style="margin-bottom:1rem;">Whether building a portfolio for university applications, exploring a potential career path, or simply wanting to understand how social platforms and apps actually work — this programme delivers practical, transferable skills that stand out on any CV or application.</p>
                        <span style="display:inline-flex;align-items:center;gap:.4rem;background:rgba(247,59,59,.82);border:1px solid var(--nlm-red);border-radius:20px;padding:.25rem .75rem;font-size:.78rem;font-weight:700;color:#fff;">
                            <i class="fas fa-trophy"></i> Stands out on university applications
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card" style="text-align:left; height:100%;">
                        <div class="nlm-service-icon"><i class="fas fa-briefcase"></i></div>
                        <h5 class="nlm-service-title">Adults &amp; Career Changers</h5>
                        <p class="nlm-service-desc" style="margin-bottom:1rem;">It is never too late to start. Business owners who want to understand their tech, professionals looking to switch into development, or adults pursuing a personal project — all welcome. The same curriculum, adapted to your pace, your goals, and your schedule.</p>
                        <span style="display:inline-flex;align-items:center;gap:.4rem;background:rgba(23,195,245,.12);border:1px solid rgba(23,195,245,.25);border-radius:20px;padding:.25rem .75rem;font-size:.78rem;font-weight:700;color:var(--nlm-blue);">
                            <i class="fas fa-sync-alt"></i> Career change is always possible
                        </span>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#cl-register" class="nlm-btn nlm-btn-red">
                    <i class="fas fa-pen"></i> Register / Enquire
                </a>
            </div>
        </div>
    </section>

    <!-- ══ CTA ════════════════════════════════════════════════════ -->
    <section id="cl-register" class="nlm-section-sm" style="background:var(--nlm-dark-2); border-top:1px solid var(--nlm-border);">
        <div class="container text-center">
            <span class="nlm-label">Ready to Get Started?</span>
            <h2 class="nlm-heading" style="margin-bottom:1rem;">Book Your First <span class="nlm-gradient-text">Free Session</span></h2>
            <p style="color:var(--nlm-text); max-width:580px; margin:0 auto 2rem; font-size:1rem;">The first session is always free — no commitment, no pressure. We will assess the student's current level, explain exactly how the programme works, and answer any questions you have.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <button type="button" class="nlm-btn nlm-btn-red" data-bs-toggle="modal" data-bs-target="#codingModal">
                    <i class="fas fa-paper-plane"></i> Book a Free Session
                </button>
                <a href="<?= $base ?>services" class="nlm-btn nlm-btn-outline">
                    <i class="fas fa-arrow-left"></i> Back to Services
                </a>
            </div>
        </div>
    </section>

    <style>
    #codingModal .form-control,
    #codingModal .form-select {
        background:   #fff !important;
        border-color: #ced4da !important;
        color:        #333   !important;
    }
    #codingModal .form-control:focus,
    #codingModal .form-select:focus {
        background:   #fff !important;
        border-color: var(--site-theme) !important;
        color:        #333 !important;
        box-shadow:   0 0 0 3px rgba(13,71,161,.15) !important;
    }
    #codingModal .form-control::placeholder { color: #aaa !important; }
    #codingModal .form-label { color: #333 !important; }
    </style>

    <!-- ══ POPUP MODAL ════════════════════════════════════════════ -->
    <div class="modal fade" id="codingModal" tabindex="-1" aria-labelledby="codingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content border-0 shadow-lg" style="border-radius:14px; overflow:hidden;">

                <!-- Blue header — matches subscribe modal pattern -->
                <div class="modal-header border-0 py-4 px-4" style="background: var(--site-theme);">
                    <div>
                        <h5 class="modal-title fw-bold text-white" id="codingModalLabel" style="font-size:1.15rem;">
                            <i class="fas fa-laptop-code me-2"></i> Get In Touch About Coding Lessons
                        </h5>
                        <p class="mb-0 mt-1" style="color:rgba(255,255,255,.8); font-size:.84rem;">Fill in the form below — we'll get back to you within one business day.</p>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Light body -->
                <div class="modal-body px-4 py-4" style="background:#fff;">
                    <form id="codingForm" novalidate>
                        <input type="hidden" name="_csrf_token" value="<?= getCsrfToken() ?>">

                        <!-- Common fields -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Full Name <span style="color:var(--nlm-red);">*</span></label>
                                <input type="text" id="clName" name="name" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Email Address <span style="color:var(--nlm-red);">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Phone Number <span style="color:#999; font-weight:400;">(optional)</span></label>
                                <input type="text" name="phone" class="form-control" placeholder="e.g. 416 555 0100">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Reason for Getting in Touch <span style="color:var(--nlm-red);">*</span></label>
                                <select name="reason" id="codingReason" class="form-select" required>
                                    <option value="">Select a reason…</option>
                                    <option value="inquiry">Send an Enquiry</option>
                                    <option value="booking">Book a Session</option>
                                </select>
                            </div>
                        </div>

                        <!-- Inquiry fields -->
                        <div id="clInquiryFields" style="display:none; margin-top:1.25rem;">
                            <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Your Message <span style="color:var(--nlm-red);">*</span></label>
                            <textarea id="clMessage" name="message" class="form-control" rows="5" placeholder="Tell us what you'd like to know — we'll reply within one business day." style="resize:vertical;"></textarea>
                        </div>

                        <!-- Booking fields -->
                        <div id="clBookingFields" style="display:none; margin-top:1.25rem;">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Preferred Start Date <span style="color:var(--nlm-red);">*</span></label>
                                    <input type="date" name="start_date" id="clStartDate" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Session Frequency <span style="color:var(--nlm-red);">*</span></label>
                                    <select name="frequency" id="clFrequency" class="form-select">
                                        <option value="">How often?</option>
                                        <option value="once_weekly">Once a week</option>
                                        <option value="twice_weekly">Twice a week</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Age Group <span style="color:var(--nlm-red);">*</span></label>
                                    <select name="age_group" id="clAgeGroup" class="form-select">
                                        <option value="">Select age group</option>
                                        <option value="child">Child (Age 10–12)</option>
                                        <option value="teen">Teen (Age 13–17)</option>
                                        <option value="adult">Adult (Age 18+)</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">
                                        What to Learn
                                        <span style="font-size:.78rem; font-weight:400; color:#666;">(full course recommended for beginners)</span>
                                    </label>
                                    <select name="language" id="clLanguage" class="form-select">
                                        <option value="HTML/CSS/JS" selected>Full Course: HTML, CSS &amp; JavaScript ★</option>
                                        <option value="HTML">HTML only</option>
                                        <option value="CSS">CSS only</option>
                                        <option value="JavaScript">JavaScript only</option>
                                        <option value="Node.js">Node.js (server-side)</option>
                                        <option value="PHP">PHP</option>
                                        <option value="Python">Python</option>
                                        <option value="Java">Java</option>
                                        <option value="Go">Go</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Response message -->
                        <div id="clFormMsg" style="display:none; margin-top:1.25rem;" role="alert"></div>

                        <!-- Submit -->
                        <div id="clSubmitWrap" style="display:none; margin-top:1.5rem;">
                            <button type="submit" id="clSubmitBtn" class="btn fw-bold w-100 py-2" style="background:var(--site-theme); color:#fff; border:none; border-radius:8px; font-size:1rem; letter-spacing:.02em;">
                                <i class="fas fa-paper-plane me-2" id="clSubmitIcon"></i>
                                <span id="clSubmitLabel">Send</span>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer border-0 px-4 pb-4 pt-0" style="background:#fff;">
                    <small style="color:#999;"><i class="fas fa-lock me-1"></i> Your details are kept private and never shared.</small>
                </div>
            </div>
        </div>
    </div>

    <script>
    (function () {
        const reasonSel     = document.getElementById('codingReason');
        const inquiryFields = document.getElementById('clInquiryFields');
        const bookingFields = document.getElementById('clBookingFields');
        const submitWrap    = document.getElementById('clSubmitWrap');
        const submitLabel   = document.getElementById('clSubmitLabel');
        const formMsg       = document.getElementById('clFormMsg');
        const form          = document.getElementById('codingForm');
        const base          = '<?= $base ?>';

        reasonSel.addEventListener('change', function () {
            const v = this.value;
            inquiryFields.style.display = v === 'inquiry' ? '' : 'none';
            bookingFields.style.display = v === 'booking' ? '' : 'none';
            submitWrap.style.display    = v ? '' : 'none';
            submitLabel.textContent     = v === 'booking' ? 'Request a Session' : 'Send Enquiry';
            formMsg.style.display       = 'none';
        });

        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            const btn    = document.getElementById('clSubmitBtn');
            const icon   = document.getElementById('clSubmitIcon');
            const reason = reasonSel.value;
            const url    = reason === 'inquiry'
                ? base + 'coding-lessons/inquiry'
                : base + 'coding-lessons/book';
            const visitorName = (document.getElementById('clName').value.trim().split(' ')[0]) || '';

            btn.disabled       = true;
            icon.className     = 'fas fa-spinner fa-spin';
            formMsg.style.display = 'none';

            try {
                const res  = await fetch(url, { method: 'POST', body: new FormData(this) });
                const data = await res.json();

                formMsg.style.display = '';

                if (data.success) {
                    formMsg.className = 'alert';
                    formMsg.style.cssText = 'display:block; margin-top:1.25rem; background:#d4edda; border:1px solid #5a9b6a; color:#1a5c2a; font-weight:600;';
                    const prefix = visitorName ? 'Thank you, ' + visitorName + '! ' : 'Thank you! ';
                    formMsg.textContent = prefix + data.message.replace(/^Thank you[.,]?\s*/i, '');
                } else {
                    formMsg.className   = 'alert alert-danger';
                    formMsg.style.cssText = '';
                    formMsg.textContent = data.message;
                }

                if (data.success) {
                    form.reset();
                    inquiryFields.style.display = 'none';
                    bookingFields.style.display = 'none';
                    submitWrap.style.display    = 'none';
                    reasonSel.value = '';
                }
            } catch (_) {
                formMsg.style.display = '';
                formMsg.className     = 'alert alert-danger';
                formMsg.textContent   = 'Something went wrong. Please try again or email us directly.';
            } finally {
                btn.disabled   = false;
                icon.className = 'fas fa-paper-plane';
            }
        });

        document.getElementById('codingModal').addEventListener('hidden.bs.modal', function () {
            form.reset();
            inquiryFields.style.display = 'none';
            bookingFields.style.display = 'none';
            submitWrap.style.display    = 'none';
            formMsg.style.display       = 'none';
            reasonSel.value = '';
        });
    }());
    </script>

    <?php
    }
}
