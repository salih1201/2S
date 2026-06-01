<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERATION: CYBERHEIST - ACCESS DENIED</title>
    <meta name="description" content="Mission failed. Connection terminated by target mainframe.">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700;800&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
</head>

<body class="lose-page">

    <!-- HUD Background Effects -->
    <div class="win-bg-grid"></div>
    <div class="win-bg-scanline"></div>

    <!-- Top Navbar -->
    <header class="win-topbar">
        <div class="win-topbar-inner">
            <div class="win-topbar-brand">
                <span class="material-symbols-outlined">terminal</span>
                <h1 class="win-topbar-title">OPERATION: CYBERHEIST</h1>
            </div>
            <nav class="win-topbar-nav">
                <a href="#">MISSION</a>
                <a href="#" class="active">INTEL</a>
                <a href="#">DECRYPT</a>
                <a href="#">LOGS</a>
            </nav>
            <div class="win-topbar-actions">
                <button class="material-symbols-outlined">settings</button>
                <div class="win-avatar-wrap">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVRBIgknknpftZ3HTMxXUw43cENV2YLhZDupsdLCBFra8YnbhJR7IgOqed13KaQIvIx-2WaV70Il5ww9faZ-5IisDjtlZqeUrKXsTCf-bCRuf7cKwln36d3cV19Z82VL15oQJHNYaMKNr7MEvtnxJjzAB62yqwi1Wpf2A6eVjG5_F6SyPhqdoGaf1RemGvv4cQOMlsNiNWpw2mlsUNj-DX-_gEoP2R3g74icnIrXlgxB5arDMukDRDFwB0cvHEzKYRjMd5vjrVgc8o" alt="Operator Avatar">
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="win-sidebar">
        <div class="win-sidebar-header">
            <div class="win-sidebar-status">OP_STATUS: FAILED</div>
            <div class="win-sidebar-substatus">SYSTEM_LOCKDOWN_ACTIVE</div>
        </div>
        <div class="win-sidebar-nav">
            <div class="win-sidebar-item active">
                <span class="material-symbols-outlined">radar</span>
                <span>MISSION</span>
            </div>
            <div class="win-sidebar-item">
                <span class="material-symbols-outlined">gps_fixed</span>
                <span>TARGETS</span>
            </div>
            <div class="win-sidebar-item">
                <span class="material-symbols-outlined">military_tech</span>
                <span>REWARDS</span>
            </div>
            <div class="win-sidebar-item">
                <span class="material-symbols-outlined">hub</span>
                <span>NETWORK</span>
            </div>
        </div>
        <div class="win-sidebar-cta">
            <button class="win-sidebar-btn" onclick="window.location.href='index.php'">TRY AGAIN</button>
        </div>
        <div class="win-sidebar-logout">
            <div class="win-sidebar-logout-item" onclick="window.location.href='index.php'">
                <span class="material-symbols-outlined">power_settings_new</span>
                <span>LOGOUT</span>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="win-main">
        <!-- Hero Section -->
        <section class="win-hero">
            <div class="win-seal-wrapper">
                <div class="win-seal-glow"></div>
                <div class="win-seal">
                    <span class="material-symbols-outlined">gpp_bad</span>
                    <h2 class="win-seal-text">ACCESS DENIED</h2>
                </div>
            </div>

            <div class="win-timer-section">
                <p class="win-timer-label">REMAINING_TIME</p>
                <h3 class="win-timer-value" id="timer">00:00:00</h3>
                <p class="win-timer-status">SYSTEM_LOCKOUT // SECURITY_BREACH_DETECTED</p>
            </div>
        </section>

        <!-- Stats Grid -->
        <section class="win-stats">
            <!-- Module 1: Mainframe -->
            <div class="win-stat-card">
                <span class="win-stat-hex">0x61...FF</span>
                <div class="win-stat-header">
                    <span class="material-symbols-outlined">lock</span>
                    <h4 class="win-stat-title">Mainframe Locked</h4>
                </div>
                <div class="win-stat-metric">
                    <span>DATA_EXTRACTION</span>
                    <span class="win-stat-metric-value" style="color: var(--win-cyan)">0%</span>
                </div>
                <div class="win-progress">
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                </div>
                <p class="win-stat-footer">CORE_KERNEL_LOCKED</p>
                <div class="win-stat-card-overlay"></div>
            </div>

            <!-- Module 2: Vault -->
            <div class="win-stat-card">
                <span class="win-stat-hex">0xAE...2C</span>
                <div class="win-stat-header">
                    <span class="material-symbols-outlined">lock</span>
                    <h4 class="win-stat-title">Vault Shielded</h4>
                </div>
                <div class="win-stat-metric">
                    <span>ENCRYPTION_BREAK</span>
                    <span class="win-stat-metric-value" style="color: var(--win-cyan)">0%</span>
                </div>
                <div class="win-progress">
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                    <span class="win-progress-segment"></span>
                </div>
                <p class="win-stat-footer">DECRYPTION_ATTEMPT_ABORTED</p>
                <div class="win-stat-card-overlay"></div>
            </div>

            <!-- Module 3: Security -->
            <div class="win-stat-card">
                <span class="win-stat-hex">0x00...00</span>
                <div class="win-stat-header">
                    <span class="material-symbols-outlined">gpp_maybe</span>
                    <h4 class="win-stat-title">Security Active</h4>
                </div>
                <div class="win-stat-metric">
                    <span>INTRUDER_ALERT</span>
                    <span class="win-stat-metric-value" style="color: var(--win-cyan)">100%</span>
                </div>
                <div class="win-progress">
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                    <span class="win-progress-segment filled"></span>
                </div>
                <p class="win-stat-footer">TRACERS_LOCKED_ON_PROXY</p>
                <div class="win-stat-card-overlay"></div>
            </div>
        </section>

        <!-- CTA Buttons -->
        <section class="win-cta">
            <button class="win-btn win-btn--cyan" onclick="window.location.href='index.php'">
                <span class="material-symbols-outlined">refresh</span>
                TRY AGAIN
            </button>
            <button class="win-btn win-btn--outline-cyan" onclick="window.location.href='index.php'">
                MAIN LOBBY
            </button>
        </section>
    </main>

    <!-- Footer (Desktop) -->
    <footer class="win-footer">
        <div class="win-footer-status">
            <span class="win-footer-dot">●</span>
            0x7F - LOCKED // PROTOCOL_V.2.4.0
        </div>
        <div class="win-footer-links">
            <a href="index.php">TRY_AGAIN</a>
            <a href="index.php">MAIN_LOBBY</a>
            <a href="#">COREDUMP_LOG</a>
        </div>
        <div class="win-footer-copy">© 2024 CYBER_OPS</div>
    </footer>

    <!-- Mobile Bottom Nav -->
    <nav class="win-mobile-nav">
        <div class="win-mobile-nav-item active" onclick="window.location.href='index.php'">
            <span class="material-symbols-outlined">radar</span>
            MISSION
        </div>
        <div class="win-mobile-nav-item">
            <span class="material-symbols-outlined">gps_fixed</span>
            TARGETS
        </div>
        <div class="win-mobile-nav-item">
            <span class="material-symbols-outlined">military_tech</span>
            REWARDS
        </div>
        <div class="win-mobile-nav-item">
            <span class="material-symbols-outlined">hub</span>
            NETWORK
        </div>
    </nav>

    <!-- Atmosphere Script -->
    <script>
        // Button hover glitch
        document.querySelectorAll('button').forEach(function(btn) {
            btn.addEventListener('mouseenter', function() {
                if (Math.random() > 0.8) {
                    btn.style.animation = 'glitch 0.2s';
                    setTimeout(function() {
                        btn.style.animation = '';
                    }, 200);
                }
            });
        });

        // Progress segment flicker for Alert card (third card)
        var segments = document.querySelectorAll('.win-stat-card:nth-child(3) .win-progress-segment');
        setInterval(function() {
            segments.forEach(function(seg) {
                if (Math.random() > 0.95) {
                    seg.classList.toggle('filled');
                    setTimeout(function() {
                        seg.classList.toggle('filled');
                    }, 100);
                }
            });
        }, 500);
    </script>

</body>

</html>