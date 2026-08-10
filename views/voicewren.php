<?php

namespace Dorguzen\Views;

class voicewren extends \Dorguzen\Core\DGZ_HtmlView
{
    public function show(array $viewModel = []): void
    {
        $base = $this->controller->config->getFileRootPath();
        $this->addMetadata([
            '<title>VoiceWren — AI Phone Answering for Busy Trades | Nolimit Media</title>',
            '<meta name="description" content="VoiceWren is Nolimit Media\'s own AI receptionist product: it picks up every business call, answers questions, books the job, and hands you the lead — day or night.">',
            '<meta name="keywords" content="AI receptionist Canada, AI phone answering, missed call solution, answering service Toronto, AI automation for trades, Nolimit Media products">',
            '<link rel="canonical" href="https://nolimitmedia.ca/voicewren">',
            '<meta property="og:title" content="VoiceWren — AI Phone Answering, Built In-House">',
            '<meta property="og:description" content="Our own AI receptionist product. Every call answered, every lead captured — without hiring anyone.">',
            '<meta property="og:type" content="product">',
        ]);
    ?>

    <!-- ══ PAGE HERO ══════════════════════════════════════════════ -->
    <section class="nlm-page-hero" style="padding-top: calc(var(--nlm-header-h) + 50px);">
        <div class="nlm-page-hero-content container">
            <span class="nlm-label" style="color:rgba(255,255,255,.7);">Our Own Product</span>
            <h1>VoiceWren</h1>
            <p>The phone gets answered. Every time. Even when nobody's free to pick it up.</p>
            <div class="nlm-breadcrumb">
                <a href="<?= $base ?>">Home</a>
                <span>/</span>
                <a href="<?= $base ?>services">Services</a>
                <span>/</span>
                <span style="color:#fff;">VoiceWren</span>
            </div>
        </div>
    </section>

    <!-- ══ THE PROBLEM ════════════════════════════════════════════ -->
    <section class="nlm-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="nlm-label nlm-label-lg red">The Problem<span class="nlm-sceptre-line"></span></span>
                    <h2 class="nlm-heading">A Ringing Phone Is <span class="nlm-gradient-text">Money Walking Away</span></h2>
                    <p style="color:var(--nlm-text); margin-bottom:1.1rem;">
                        Think about how a customer actually behaves. Their furnace dies on a Sunday, or water is coming
                        through the ceiling. They search, they call the first number, and if it rings out they do not
                        leave a voicemail and wait — they call the next name on the list. The job is gone before you
                        ever knew it existed.
                    </p>
                    <p style="color:var(--nlm-text); margin-bottom:1.1rem;">
                        For trades and service businesses this happens constantly, and never at a convenient moment.
                        You are under a sink, up a ladder, driving between sites, or asleep. The work that pays for
                        your week is arriving on a line nobody can reach.
                    </p>
                    <p style="color:var(--nlm-text);">
                        The traditional fixes all cost something real. A receptionist is a salary. A call centre reads
                        from a script and knows nothing about your business. Voicemail simply moves the problem to
                        later, when the customer has already booked someone else.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="nlm-service-card">
                        <div class="nlm-service-icon"><i class="fas fa-phone-slash"></i></div>
                        <h5 class="nlm-service-title">What a missed call really costs</h5>
                        <p class="nlm-service-desc">
                            One missed call is rarely one lost job. It is the repeat work that customer would have
                            brought over the following years, and the people they would have recommended you to.
                            A single recovered call a month usually pays for the system several times over.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ WHAT IT IS ═════════════════════════════════════════════ -->
    <section class="nlm-section" style="background:var(--nlm-dark-2); border-top:1px solid var(--nlm-border); border-bottom:1px solid var(--nlm-border);">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label nlm-label-lg">The Solution<span class="nlm-sceptre-line"></span></span>
                <h2 class="nlm-heading">An Employee Who <span class="nlm-gradient-text">Never Misses a Shift</span></h2>
                <p class="nlm-subheading">
                    VoiceWren answers your phone with a natural speaking voice, holds a real conversation with the
                    caller, and makes sure the details reach you — whatever time it happens to be.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card">
                        <div class="nlm-service-icon"><i class="fas fa-comments"></i></div>
                        <h5 class="nlm-service-title">It Holds a Conversation</h5>
                        <p class="nlm-service-desc">
                            Not a menu, and not a recording. Callers explain their problem in their own words and get
                            a sensible answer back — your hours, your service area, your prices, what you do and do
                            not take on. It is briefed on your business before it takes a single call.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card red">
                        <div class="nlm-service-icon"><i class="fas fa-calendar-check"></i></div>
                        <h5 class="nlm-service-title">It Books the Work</h5>
                        <p class="nlm-service-desc">
                            When the caller is ready to go ahead, it takes the job down properly — name, number,
                            address, what is wrong, when they need someone. No half-written notes on the back of an
                            invoice.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card">
                        <div class="nlm-service-icon"><i class="fas fa-bolt"></i></div>
                        <h5 class="nlm-service-title">You Hear About It Immediately</h5>
                        <p class="nlm-service-desc">
                            The moment a call ends, the lead is in your hands — a written summary and full transcript
                            by email and phone notification, plus a dashboard holding every call the system has ever
                            taken for you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ DEMO VIDEO ═════════════════════════════════════════════ -->
    <section class="nlm-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label nlm-label-lg red">See It Work<span class="nlm-sceptre-line"></span></span>
                <h2 class="nlm-heading">Sixty Seconds, <span class="nlm-gradient-text">Start to Finish</span></h2>
                <p class="nlm-subheading">Watch what happens to a call that would otherwise have gone unanswered.</p>
            </div>
            <div style="max-width:820px; margin:0 auto; aspect-ratio:16/9; border-radius:14px; overflow:hidden; background:#000; box-shadow:0 18px 50px rgba(0,0,0,.45);">
                <iframe src="https://www.youtube-nocookie.com/embed/RY-BgXMwzV4"
                        title="VoiceWren — Your AI Receptionist That Never Misses a Call"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                        style="display:block; width:100%; height:100%; border:0;"></iframe>
            </div>
        </div>
    </section>

    <!-- ══ WHO IT IS FOR ══════════════════════════════════════════ -->
    <section class="nlm-section" style="background:var(--nlm-dark-2); border-top:1px solid var(--nlm-border); border-bottom:1px solid var(--nlm-border);">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label nlm-label-lg">Who It Suits<span class="nlm-sceptre-line"></span></span>
                <h2 class="nlm-heading">Built For People Whose <span class="nlm-gradient-text">Hands Are Full</span></h2>
                <p class="nlm-subheading">
                    It earns its keep fastest wherever the person who answers the phone is also the person doing the work.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                $fits = [
                    ['icon' => 'fas fa-wrench',        'title' => 'Trades &amp; Home Services', 'desc' => 'Plumbers, electricians, HVAC, roofing, garage doors, landscaping — anyone whose customers ring in an emergency and will not wait for a callback.', 'red' => false],
                    ['icon' => 'fas fa-truck',         'title' => 'Mobile &amp; On-Site Teams', 'desc' => 'Businesses run from a van or a job site, where the phone is competing with the work and the work usually wins.',                                  'red' => true],
                    ['icon' => 'fas fa-store',         'title' => 'Small Shops &amp; Studios',  'desc' => 'Salons, garages, clinics and studios where the same person greets customers, takes payment, and answers the phone.',                             'red' => false],
                    ['icon' => 'fas fa-clock',         'title' => 'Anyone Trading Out of Hours','desc' => 'Emergency callouts, evenings, weekends, holidays — the hours when your competitors send callers to voicemail.',                              'red' => true],
                ];
                foreach ($fits as $fit): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="nlm-service-card <?= $fit['red'] ? 'red' : '' ?>">
                        <div class="nlm-service-icon"><i class="<?= $fit['icon'] ?>"></i></div>
                        <h5 class="nlm-service-title"><?= $fit['title'] ?></h5>
                        <p class="nlm-service-desc"><?= $fit['desc'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ══ THE ENGINEERING ════════════════════════════════════════ -->
    <section class="nlm-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label nlm-label-lg red">Under The Hood<span class="nlm-sceptre-line"></span></span>
                <h2 class="nlm-heading">Simple To Use Because It Is <span class="nlm-gradient-text">Sophisticated Underneath</span></h2>
                <p class="nlm-subheading">
                    VoiceWren is designed, built, hosted and maintained in-house. It is the clearest demonstration of
                    what we do for clients: several specialist services fused into one product that feels like magic
                    to the person using it.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card">
                        <div class="nlm-service-icon"><i class="fas fa-cloud"></i></div>
                        <h5 class="nlm-service-title">Cloud Infrastructure</h5>
                        <p class="nlm-service-desc">
                            Runs on AWS cloud infrastructure with encrypted traffic, automated certificates and
                            monitored uptime — the same standard we build client platforms to.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card red">
                        <div class="nlm-service-icon"><i class="fas fa-plug"></i></div>
                        <h5 class="nlm-service-title">API Synergy</h5>
                        <p class="nlm-service-desc">
                            Telephony, speech, language understanding, scheduling and notifications are separate
                            specialist services. The engineering is in making them behave as one — and in keeping any
                            single one replaceable.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card">
                        <div class="nlm-service-icon"><i class="fas fa-layer-group"></i></div>
                        <h5 class="nlm-service-title">Multi-Tenant By Design</h5>
                        <p class="nlm-service-desc">
                            Every business gets its own number, its own briefing and its own strictly separated data.
                            No client can see another's calls — enforced in the architecture, not by convention.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card red">
                        <div class="nlm-service-icon"><i class="fas fa-shield-halved"></i></div>
                        <h5 class="nlm-service-title">Canadian Numbers, Canadian Data</h5>
                        <p class="nlm-service-desc">
                            Local numbers your customers recognise, with call records handled under Canadian privacy
                            expectations — a deliberate choice, and a harder one to engineer.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card">
                        <div class="nlm-service-icon"><i class="fas fa-mobile-screen"></i></div>
                        <h5 class="nlm-service-title">Installs Like An App</h5>
                        <p class="nlm-service-desc">
                            The dashboard sits on your phone's home screen and pushes alerts like any other app —
                            with nothing to download from an app store and nothing to update.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card red">
                        <div class="nlm-service-icon"><i class="fas fa-gears"></i></div>
                        <h5 class="nlm-service-title">Automation That Fits You</h5>
                        <p class="nlm-service-desc">
                            The same approach can be pointed at whatever eats your week — bookings, follow-ups,
                            reminders, quotes. If your business has a repetitive workflow, it can usually be automated.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ CTA: BOOK OR CALL BACK ═════════════════════════════════ -->
    <section class="nlm-section" style="background:var(--nlm-dark-2); border-top:1px solid var(--nlm-border);" id="book">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label nlm-label-lg">Next Step<span class="nlm-sceptre-line"></span></span>
                <h2 class="nlm-heading">Hear It Answer <span class="nlm-gradient-text">Your Phone</span></h2>
                <p class="nlm-subheading">
                    Pick a time that suits you and we will walk you through it live — or leave your number and we
                    will call you back.
                </p>
                <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:1.5rem;">
                    <button type="button" class="nlm-btn nlm-btn-red" data-bs-toggle="modal" data-bs-target="#voicewrenModal">
                        <i class="fas fa-phone-volume"></i> Request a Call Back
                    </button>
                    <a href="https://voicewren.com" target="_blank" rel="noopener" class="nlm-btn nlm-btn-outline">
                        <i class="fas fa-arrow-up-right-from-square"></i> Visit voicewren.com
                    </a>
                </div>
            </div>

            <!-- Calendly inline widget -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/gustavfn/new-meeting" style="min-width:320px; height:680px;"></div>
            <p class="text-center" style="color:var(--nlm-text); font-size:.9rem; margin-top:1rem;">
                Calendar not loading?
                <a href="https://calendly.com/gustavfn/new-meeting" target="_blank" rel="noopener" style="color:var(--nlm-blue);">Open it in a new tab</a>.
            </p>
        </div>
    </section>

    <style>
    #voicewrenModal .form-control,
    #voicewrenModal .form-select {
        background:#fff !important; color:#333 !important; border:1px solid #ccc !important;
    }
    #voicewrenModal .form-control:focus,
    #voicewrenModal .form-select:focus {
        background:#fff !important; color:#333 !important; border-color:var(--site-theme) !important; box-shadow:none !important;
    }
    #voicewrenModal .form-control::placeholder { color:#aaa !important; }
    #voicewrenModal .form-label { color:#333 !important; }
    </style>

    <!-- ══ CALL-BACK MODAL ════════════════════════════════════════ -->
    <div class="modal fade" id="voicewrenModal" tabindex="-1" aria-labelledby="voicewrenModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content border-0 shadow-lg" style="border-radius:14px; overflow:hidden;">

                <div class="modal-header border-0 py-4 px-4" style="background: var(--site-theme);">
                    <div>
                        <h5 class="modal-title fw-bold text-white" id="voicewrenModalLabel" style="font-size:1.15rem;">
                            <i class="fas fa-phone-volume me-2"></i> Request a Call Back
                        </h5>
                        <p class="mb-0 mt-1" style="color:rgba(255,255,255,.8); font-size:.84rem;">
                            Tell us a little about your business — we'll get back to you within one business day.
                        </p>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body px-4 py-4" style="background:#fff;">
                    <form id="voicewrenForm" novalidate>
                        <input type="hidden" name="_csrf_token" value="<?= getCsrfToken() ?>">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Full Name <span style="color:var(--nlm-red);">*</span></label>
                                <input type="text" id="vwName" name="name" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Email Address <span style="color:var(--nlm-red);">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="you@yourbusiness.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Phone Number <span style="color:#999; font-weight:400;">(optional)</span></label>
                                <input type="text" name="phone" class="form-control" placeholder="e.g. 416 555 0100">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">Type of Business <span style="color:#999; font-weight:400;">(optional)</span></label>
                                <input type="text" name="business" class="form-control" placeholder="e.g. plumbing, HVAC, roofing">
                            </div>
                        </div>

                        <div class="mt-3">
                            <label class="form-label fw-semibold" style="font-size:.88rem; color:#333;">How Can We Help? <span style="color:var(--nlm-red);">*</span></label>
                            <textarea id="vwMessage" name="message" class="form-control" rows="5" required
                                      placeholder="Tell us roughly how many calls you miss in a week, and the best time to reach you." style="resize:vertical;"></textarea>
                        </div>

                        <div id="vwFormMsg" class="alert" style="display:none; margin-top:1.25rem;"></div>

                        <div class="mt-4">
                            <button type="submit" id="vwSubmitBtn" class="nlm-btn nlm-btn-red">
                                <i id="vwSubmitIcon" class="fas fa-paper-plane"></i> Send Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://assets.calendly.com/assets/external/widget.js" async></script>
    <script>
    (function () {
        const form    = document.getElementById('voicewrenForm');
        const formMsg = document.getElementById('vwFormMsg');
        const base    = '<?= $base ?>';

        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            const btn  = document.getElementById('vwSubmitBtn');
            const icon = document.getElementById('vwSubmitIcon');
            const visitorName = (document.getElementById('vwName').value.trim().split(' ')[0]) || '';

            btn.disabled          = true;
            icon.className        = 'fas fa-spinner fa-spin';
            formMsg.style.display = 'none';

            try {
                const res  = await fetch(base + 'voicewren/inquiry', { method: 'POST', body: new FormData(this) });
                const data = await res.json();

                formMsg.style.display = '';

                if (data.success) {
                    formMsg.className     = 'alert';
                    formMsg.style.cssText = 'display:block; margin-top:1.25rem; background:#d4edda; border:1px solid #5a9b6a; color:#1a5c2a; font-weight:600;';
                    const prefix = visitorName ? 'Thank you, ' + visitorName + '! ' : 'Thank you! ';
                    formMsg.textContent = prefix + data.message.replace(/^Thank you[.,]?\s*/i, '');
                    form.reset();
                } else {
                    formMsg.className     = 'alert alert-danger';
                    formMsg.style.cssText = '';
                    formMsg.textContent   = data.message;
                }
            } catch (_) {
                formMsg.style.display = '';
                formMsg.className     = 'alert alert-danger';
                formMsg.textContent   = 'Something went wrong. Please try again, or email us directly.';
            } finally {
                btn.disabled   = false;
                icon.className = 'fas fa-paper-plane';
            }
        });

        document.getElementById('voicewrenModal').addEventListener('hidden.bs.modal', function () {
            form.reset();
            formMsg.style.display = 'none';
        });
    }());
    </script>

    <?php
    }
}
