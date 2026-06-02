<?php
require_once __DIR__ . '/../dbcon.php';

$riddles = [];
if (isset($db_connection) && $db_connection instanceof PDO) {
    try {
        $stmt = $db_connection->query("SELECT * FROM question WHERE roomId = 1");
        $riddles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Safe fallback in case of SQL errors
    }
}

// Fallback to high-quality interactive riddles if the database is not connected or empty
if (empty($riddles)) {
    $riddles = [
        [
            'question' => 'Decodeer de binaire reeks: 01001000 01000101 01001100 01001100 01001111 (Vertaal naar ASCII tekst)',
            'answer' => 'HELLO'
        ],
        [
            'question' => 'Ik ben een code zonder stem, maar ik spreek tot de machine. Ik heb veel regels maar geen handen. Wat ben ik? (Één woord in het Engels)',
            'answer' => 'program'
        ],
        [
            'question' => 'Ontcijfer de ROT-3 cipher "FBAHU" om het doeltrefwoord te onthullen. (Verschuif elke letter 3 posities terug in het alfabet)',
            'answer' => 'CYBER'
        ]
    ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERATION: CYBERHEIST - ACTIVE DECRYPTION</title>
    <meta name="description" content="Decrypt security nodes to bypass mainframe security protocols.">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700;800&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
</head>

<body class="win-page">

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
                <a href="#" class="active">DECRYPT</a>
                <a href="#">INTEL</a>
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
            <div class="win-sidebar-status">OP_STATUS: ACTIVE</div>
            <div class="win-sidebar-substatus">OVERRIDE_IN_PROGRESS</div>
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

        <!-- Sidebar Decryption Status Console -->
        <div class="win-sidebar-header" style="margin-top: 24px; border-left: 2px solid var(--win-cyan); padding-left: 12px;">
            <div class="win-sidebar-status" style="color: var(--win-cyan); text-shadow: 0 0 8px var(--win-cyan);">BYPASS NODES</div>
            <div class="win-sidebar-substatus" style="font-size: 16px; font-weight: bold; color: var(--win-text-light); margin-top: 4px;">
                <span id="nodes-solved-count">0</span> / <span id="nodes-total-count"><?php echo count($riddles); ?></span>
            </div>
        </div>

        <div class="win-sidebar-logout" style="margin-top: auto;">
            <div class="win-sidebar-logout-item" onclick="window.location.href='../index.php'">
                <span class="material-symbols-outlined">power_settings_new</span>
                <span>ABORT OPERATION</span>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="win-main">
        <!-- Hero Section -->
        <section class="win-hero">
            <div class="win-seal-wrapper">
                <div class="win-seal-glow"></div>
                <div class="win-seal" id="seal-element" style="border-color: var(--win-cyan); box-shadow: 0 0 30px rgba(0, 240, 255, 0.2), inset 0 0 20px rgba(0, 240, 255, 0.1);">
                    <span class="material-symbols-outlined" id="seal-icon" style="color: var(--win-cyan); text-shadow: 0 0 15px var(--win-cyan);">lock</span>
                    <h2 class="win-seal-text" id="seal-text" style="color: var(--win-cyan); text-shadow: 0 0 10px rgba(0, 240, 255, 0.5);">DECRYPTING...</h2>
                </div>
            </div>

            <div class="win-timer-section">
                <p class="win-timer-label">LIMIT_TIME_REMAINING</p>
                <h3 class="win-timer-value" id="timer">00:10:00</h3>
                <p class="win-timer-status" id="timer-status">BYPASS_STILL_LOCKED // AVOID_DETECTION</p>
            </div>
        </section>

        <!-- Stats Nodes Grid -->
        <section class="win-stats">
            <?php foreach ($riddles as $index => $riddle) : ?>
            <div class="win-stat-card node-card" onclick="openNode(<?php echo $index; ?>)" id="node-<?php echo $index; ?>" 
                 data-index="<?php echo $index; ?>" 
                 data-riddle="<?php echo htmlspecialchars($riddle['question']); ?>" 
                 data-answer="<?php echo htmlspecialchars($riddle['answer']); ?>" 
                 data-solved="false">
                <span class="win-stat-hex">NODE_0<?php echo $index + 1; ?></span>
                <div class="win-stat-header">
                    <span class="material-symbols-outlined node-icon">lock</span>
                    <h4 class="win-stat-title">Security Node <?php echo $index + 1; ?></h4>
                </div>
                <div class="win-stat-metric">
                    <span>STATUS</span>
                    <span class="win-stat-metric-value node-status-text" style="color: var(--win-cyan)">LOCKED</span>
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
                <p class="win-stat-footer">CLICK_TO_DECRYPT</p>
                <div class="win-stat-card-overlay"></div>
            </div>
            <?php endforeach; ?>
        </section>
    </main>

    <!-- Footer (Desktop) -->
    <footer class="win-footer">
        <div class="win-footer-status">
            <span class="win-footer-dot">●</span>
            0x7F - ACTIVE // PROTOCOL_V.2.4.0
        </div>
        <div class="win-footer-links">
            <a href="#">SYSTEM_LOGS</a>
            <a href="#">NETWORK_STATUS</a>
        </div>
        <div class="win-footer-copy">© 2026 CYBER_OPS</div>
    </footer>

    <!-- Mobile Bottom Nav -->
    <nav class="win-mobile-nav">
        <div class="win-mobile-nav-item active">
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

    <!-- Interactive Decryption Modal -->
    <div class="node-overlay" id="node-overlay" onclick="closeNode()"></div>
    <div class="node-modal" id="node-modal">
        <div class="node-modal-header">
            <h3 class="node-modal-title" id="node-modal-title">DECRYPTION PROMPT</h3>
            <button class="node-modal-close material-symbols-outlined" onclick="closeNode()">close</button>
        </div>
        <div class="node-modal-question" id="node-question">
            Resolving node address...
        </div>
        <input type="text" class="node-modal-input" id="node-answer" placeholder="INPUT DECRYPTION KEY..." autocomplete="off">
        <button class="node-modal-btn" onclick="submitDecryption()">SUBMIT DECRYPTION KEY</button>
        <div class="node-modal-feedback" id="node-feedback"></div>
    </div>

    <!-- Gameplay Logic Script -->
    <script>
        var totalNodes = <?php echo count($riddles); ?>;
        var solvedNodes = 0;
        var currentNodeIndex = null;
        var timeRemaining = 600; // 10 minutes in seconds

        // Start countdown timer
        function startTimer() {
            var timerInterval = setInterval(function() {
                if (timeRemaining <= 0) {
                    clearInterval(timerInterval);
                    window.location.href = '../verlies.php';
                    return;
                }
                timeRemaining--;
                var minutes = Math.floor(timeRemaining / 60);
                var seconds = timeRemaining % 60;
                document.getElementById('timer').innerText = 
                    '00:' + 
                    (minutes < 10 ? '0' : '') + minutes + ':' + 
                    (seconds < 10 ? '0' : '') + seconds;
            }, 1000);
        }

        // Open puzzle prompt modal
        function openNode(index) {
            var card = document.getElementById('node-' + index);
            if (card.dataset.solved === 'true') {
                return;
            }

            currentNodeIndex = index;
            document.getElementById('node-modal-title').innerText = "DECRYPTION PROMPT // NODE_0" + (index + 1);
            document.getElementById('node-question').innerText = card.dataset.riddle;
            document.getElementById('node-answer').value = '';
            document.getElementById('node-feedback').innerText = '';
            document.getElementById('node-feedback').style.color = '';

            document.getElementById('node-overlay').style.display = 'block';
            document.getElementById('node-modal').style.display = 'block';

            // Auto-focus on input field
            setTimeout(function() {
                document.getElementById('node-answer').focus();
            }, 50);
        }

        // Close puzzle prompt modal
        function closeNode() {
            document.getElementById('node-overlay').style.display = 'none';
            document.getElementById('node-modal').style.display = 'none';
        }

        // Submit decryption key
        function submitDecryption() {
            var userAnswer = document.getElementById('node-answer').value.trim();
            var card = document.getElementById('node-' + currentNodeIndex);
            var correctAnswer = card.dataset.answer;
            var feedback = document.getElementById('node-feedback');

            if (userAnswer.toLowerCase() === correctAnswer.toLowerCase()) {
                feedback.innerText = "SUCCESS: HASH DECRYPTED";
                feedback.style.color = "var(--win-green)";
                feedback.style.textShadow = "0 0 5px var(--win-green)";

                // Update node visual state
                card.dataset.solved = "true";
                card.classList.add('solved');
                card.querySelector('.node-icon').innerText = 'verified';
                card.querySelector('.node-icon').style.color = 'var(--win-green)';
                card.querySelector('.node-icon').style.textShadow = '0 0 10px var(--win-green)';
                
                var statusText = card.querySelector('.node-status-text');
                statusText.innerText = "DECRYPTED";
                statusText.style.color = "var(--win-green)";
                statusText.style.textShadow = "0 0 5px var(--win-green)";

                // Fill progress bar segments of this node
                var progressSegments = card.querySelectorAll('.win-progress-segment');
                progressSegments.forEach(function(seg) {
                    seg.classList.add('filled');
                });

                solvedNodes++;
                document.getElementById('nodes-solved-count').innerText = solvedNodes;

                // Check win condition
                if (solvedNodes === totalNodes) {
                    // Update main lock seal to success
                    var seal = document.getElementById('seal-element');
                    seal.style.borderColor = "var(--win-green)";
                    seal.style.boxShadow = "0 0 30px rgba(57, 255, 20, 0.2), inset 0 0 20px rgba(57, 255, 20, 0.1)";
                    
                    var sealIcon = document.getElementById('seal-icon');
                    sealIcon.innerText = "verified";
                    sealIcon.style.color = "var(--win-green)";
                    sealIcon.style.textShadow = "0 0 15px var(--win-green)";
                    
                    var sealText = document.getElementById('seal-text');
                    sealText.innerText = "ACCESS GRANTED";
                    sealText.style.color = "var(--win-text-light)";
                    sealText.style.textShadow = "0 0 10px rgba(255, 255, 255, 0.5)";

                    document.getElementById('timer-status').innerText = "MAIN_BYPASS_STABILIZED // SYSTEM_GRANTED";
                    document.getElementById('timer-status').style.color = "var(--win-green)";

                    // Redirect to win page after success delay
                    setTimeout(function() {
                        window.location.href = '../win.php';
                    }, 1500);
                }

                setTimeout(closeNode, 1000);
            } else {
                feedback.innerText = "ERROR: INCORRECT DECRYPTION HASH";
                feedback.style.color = "var(--win-cyan)"; /* maps to red in lose-page, but here we can style alert state */
                feedback.style.textShadow = "0 0 5px #ef4444";
                feedback.style.color = "#ef4444";
            }
        }

        // Support enter key in modal input field
        document.getElementById('node-answer').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                submitDecryption();
            }
        });

        // Initialize HUD Atmosphere Effects
        document.querySelectorAll('button, .node-card').forEach(function(btn) {
            btn.addEventListener('mouseenter', function() {
                if (Math.random() > 0.8) {
                    btn.style.animation = 'glitch 0.2s';
                    setTimeout(function() {
                        btn.style.animation = '';
                    }, 200);
                }
            });
        });

        // Random segment flickering for locked nodes
        var progressSegments = document.querySelectorAll('.node-card .win-progress-segment');
        setInterval(function() {
            progressSegments.forEach(function(seg) {
                var card = seg.closest('.node-card');
                if (card.dataset.solved === 'false') {
                    if (Math.random() > 0.98) {
                        seg.classList.toggle('filled');
                        setTimeout(function() {
                            seg.classList.toggle('filled');
                        }, 100);
                    }
                }
            });
        }, 500);

        // Run timer on initialization
        startTimer();
    </script>
</body>

</html>