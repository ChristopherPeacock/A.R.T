<template>
  <section class="final-cta" id="final-cta">
    <!-- Top fade overlay -->
    <div class="fade-overlay fade-top"></div>

    <div class="container">
      <div class="cta-content">
        <div class="cta-text">
          <h2 ref="title" class="animate-title">Ready to Transform Your Risk Management?</h2>
          <p class="cta-description animate-fade-up" style="animation-delay: 0.2s;">
            Join other organizations using <span class="brand-highlight">Invenode</span> to build more resilient operations through interconnected risk intelligence. Start your free trial today.
          </p>

          <!-- CTA Buttons -->
          <div class="cta-buttons animate-fade-up" style="animation-delay: 0.4s;">
            <a href="/trial"
               class="primary-btn group"
               title="Start Free 30-Day Trial">
              <span class="btn-content">
                Start Now
                <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
              </span>
              <!-- Shine effect -->
              <div class="btn-shine"></div>
            </a>

            <a href="/contact"
               class="secondary-btn group"
               title="Talk to Risk Management Expert">
              <span class="btn-content">
                <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Talk to Expert
              </span>
            </a>
          </div>

          <!-- Trust indicators -->
          <div class="trust-indicators animate-fade-up" style="animation-delay: 0.6s;">
            <div class="trust-item">
              <svg class="trust-icon" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>30-day free trial</span>
            </div>
            <div class="trust-item">
              <svg class="trust-icon" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>No credit card required</span>
            </div>
            <div class="trust-item">
              <svg class="trust-icon" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Setup in 5 minutes</span>
            </div>
          </div>
        </div>

        <div class="cta-visual" ref="visualContainer">
          <div class="success-visualization">
            <div class="viz-bg">
              <svg class="viz-svg" viewBox="0 0 400 400">
                <!-- Animated success connections -->
                <defs>
                  <linearGradient id="successGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" :style="{ stopColor: activeColor, stopOpacity: 0.8 }" />
                    <stop offset="100%" :style="{ stopColor: secondaryColor, stopOpacity: 0.4 }" />
                  </linearGradient>
                  <filter id="successGlow">
                    <feGaussianBlur stdDeviation="3" result="coloredBlur"/>
                    <feMerge>
                      <feMergeNode in="coloredBlur"/>
                      <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                  </filter>
                </defs>

                <!-- Success path lines -->
                <g class="success-paths">
                  <path
                    v-for="(path, index) in successPaths"
                    :key="`path-${index}`"
                    :d="path.d"
                    stroke="url(#successGrad)"
                    :stroke-width="path.active ? 3 : 2"
                    :opacity="path.active ? 1 : 0.4"
                    fill="none"
                    class="success-path"
                    :class="{ active: path.active }"
                  />
                </g>

                <!-- Achievement nodes -->
                <g class="achievement-nodes">
                  <circle
                    v-for="(node, index) in achievementNodes"
                    :key="`achievement-${index}`"
                    :cx="node.x"
                    :cy="node.y"
                    :r="node.active ? node.radius * 1.3 : node.radius"
                    :fill="node.active ? activeColor : node.color"
                    :opacity="node.active ? 1 : 0.8"
                    class="achievement-node"
                    :class="{ active: node.active }"
                    filter="url(#successGlow)"
                  />
                  
                  <!-- Achievement icons -->
                  <text
                    v-for="(node, index) in achievementNodes"
                    :key="`icon-${index}`"
                    :x="node.x"
                    :y="node.y + 6"
                    text-anchor="middle"
                    :fill="node.active ? 'white' : '#16a34a'"
                    :font-size="node.active ? '18' : '16'"
                    class="achievement-icon"
                  >{{ node.icon }}</text>
                </g>

                <!-- Success waves -->
                <g class="success-waves">
                  <circle
                    v-for="(wave, index) in successWaves"
                    :key="`wave-${index}`"
                    :cx="wave.x"
                    :cy="wave.y"
                    :r="wave.radius"
                    fill="none"
                    :stroke="wave.color"
                    :stroke-width="wave.width"
                    :opacity="wave.opacity"
                    class="success-wave"
                  />
                </g>
              </svg>
            </div>

            <div class="success-overlay">
              <div class="success-metrics">
                <div class="metric-item" :class="{ active: activeMetricIndex === 0 }">
                  <div class="metric-value">{{ animatedMetrics.organizations }}+</div>
                  <div class="metric-label">Organizations</div>
                </div>
                <div class="metric-item" :class="{ active: activeMetricIndex === 1 }">
                  <div class="metric-value">{{ animatedMetrics.risksIdentified }}K+</div>
                  <div class="metric-label">Risks Identified</div>
                </div>
                <div class="metric-item" :class="{ active: activeMetricIndex === 2 }">
                  <div class="metric-value">${{ animatedMetrics.saved }}M+</div>
                  <div class="metric-label">Losses Prevented</div>
                </div>
              </div>

              <div class="central-cta-indicator">
                <div class="cta-indicator-ring"></div>
                <div class="cta-indicator-core">
                  <span class="cta-indicator-text">START TODAY</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom fade overlay -->
    <div class="fade-overlay fade-bottom"></div>
  </section>
</template>

<script setup>
import { ref, reactive, onMounted, onUnmounted } from 'vue'

const title = ref(null)
const visualContainer = ref(null)

const activeColor = ref('#16a34a')
const secondaryColor = ref('#15803d')
const activeMetricIndex = ref(0)

const animatedMetrics = reactive({
  organizations: 0,
  risksIdentified: 0,
  saved: 0
})

// Success visualization data
const achievementNodes = ref([
  { x: 200, y: 80, radius: 16, color: '#16a34a', icon: '🎯', active: false },
  { x: 120, y: 160, radius: 14, color: '#22c55e', icon: '📊', active: false },
  { x: 280, y: 160, radius: 14, color: '#22c55e', icon: '🛡️', active: false },
  { x: 80, y: 240, radius: 12, color: '#22c55e', icon: '⚡', active: false },
  { x: 200, y: 240, radius: 18, color: '#16a34a', icon: '🚀', active: false },
  { x: 320, y: 240, radius: 12, color: '#22c55e', icon: '💡', active: false },
  { x: 150, y: 320, radius: 14, color: '#22c55e', icon: '✅', active: false },
  { x: 250, y: 320, radius: 14, color: '#22c55e', icon: '🎉', active: false }
])

const successPaths = ref([
  { d: 'M 200 80 Q 160 120 120 160', active: false },
  { d: 'M 200 80 Q 240 120 280 160', active: false },
  { d: 'M 120 160 Q 100 200 80 240', active: false },
  { d: 'M 120 160 Q 160 200 200 240', active: false },
  { d: 'M 280 160 Q 240 200 200 240', active: false },
  { d: 'M 280 160 Q 300 200 320 240', active: false },
  { d: 'M 200 240 Q 175 280 150 320', active: false },
  { d: 'M 200 240 Q 225 280 250 320', active: false }
])

const successWaves = ref([])

let animationInterval
let metricsInterval

const animateMetrics = () => {
  const targets = [500, 25, 150]
  const keys = ['organizations', 'risksIdentified', 'saved']

  keys.forEach((key, index) => {
    let current = 0
    const target = targets[index]
    const increment = target / 80 // Animate over ~2.5 seconds

    const animate = () => {
      if (current < target) {
        current += increment
        animatedMetrics[key] = Math.floor(current)
        setTimeout(animate, 30)
      } else {
        animatedMetrics[key] = target
      }
    }

    setTimeout(animate, index * 300)
  })
}

const createSuccessWave = (x, y) => {
  const id = Date.now() + Math.random()
  successWaves.value.push({
    id,
    x,
    y,
    radius: 0,
    opacity: 1,
    color: activeColor.value,
    width: 2
  })

  const animateWave = () => {
    const wave = successWaves.value.find(w => w.id === id)
    if (!wave) return

    wave.radius += 1.5
    wave.opacity = Math.max(0, 1 - (wave.radius / 60))
    wave.width = Math.max(0.5, 2 - (wave.radius / 30))

    if (wave.radius < 60) {
      requestAnimationFrame(animateWave)
    } else {
      successWaves.value = successWaves.value.filter(w => w.id !== id)
    }
  }

  requestAnimationFrame(animateWave)
}

const animateSuccess = () => {
  // Randomly activate nodes and paths
  achievementNodes.value.forEach((node, index) => {
    if (Math.random() < 0.12) {
      node.active = !node.active
      if (node.active) {
        createSuccessWave(node.x, node.y)
      }
    }
  })

  successPaths.value.forEach(path => {
    if (Math.random() < 0.15) {
      path.active = !path.active
    }
  })

  // Cycle through metrics
  activeMetricIndex.value = (activeMetricIndex.value + 1) % 3
}

onMounted(() => {
  // Start animations
  setTimeout(animateMetrics, 1000)

  animationInterval = setInterval(animateSuccess, 2500)

  // Initial activation sequence
  setTimeout(() => {
    achievementNodes.value[0].active = true
    createSuccessWave(200, 80)
    
    setTimeout(() => {
      achievementNodes.value[4].active = true
      createSuccessWave(200, 240)
    }, 800)
  }, 1500)
})

onUnmounted(() => {
  if (animationInterval) clearInterval(animationInterval)
  if (metricsInterval) clearInterval(metricsInterval)
})
</script>

<style scoped>
.final-cta {
  position: relative;
  padding: 120px 0;
  background: #fff;
  overflow: hidden;
}

@media (prefers-color-scheme: dark) {
  .final-cta {
    background: #0f172a;
  }
}

.final-cta::before {
  content: "";
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 20% 80%, rgba(34, 197, 94, 0.15) 0%, transparent 50%),
    radial-gradient(circle at 80% 20%, rgba(22, 163, 74, 0.15) 0%, transparent 50%),
    radial-gradient(circle at 40% 40%, rgba(16, 185, 129, 0.1) 0%, transparent 50%);
  pointer-events: none;
}

@media (prefers-color-scheme: dark) {
  .final-cta::before {
    background:
      radial-gradient(circle at 20% 80%, rgba(34, 197, 94, 0.08) 0%, transparent 50%),
      radial-gradient(circle at 80% 20%, rgba(22, 163, 74, 0.08) 0%, transparent 50%),
      radial-gradient(circle at 40% 40%, rgba(16, 185, 129, 0.05) 0%, transparent 50%);
  }
}

.fade-overlay {
  position: absolute;
  left: 0;
  right: 0;
  height: 80px;
  pointer-events: none;
  z-index: 10;
}

.fade-top {
  top: 0;
  background: linear-gradient(to bottom, #f8fafc, rgba(248, 250, 252, 0) 100%);
}

.fade-bottom {
  bottom: 0;
  background: linear-gradient(to top, #f8fafc, rgba(248, 250, 252, 0) 100%);
}

@media (prefers-color-scheme: dark) {
  .fade-top {
    background: linear-gradient(to bottom, #0f172a, rgba(15, 23, 42, 0) 100%);
  }
  .fade-bottom {
    background: linear-gradient(to top, #0f172a, rgba(15, 23, 42, 0) 100%);
  }
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
  position: relative;
  z-index: 1;
}

.cta-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
}

.animate-title {
  font-size: 3.5rem;
  font-weight: 700;
  margin-bottom: 2rem;
  background: linear-gradient(135deg, #1f2937, #16a34a, #15803d);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 0.8s ease forwards;
}

@media (prefers-color-scheme: dark) {
  .animate-title {
    background: linear-gradient(135deg, #fff, #22c55e, #16a34a);
  }
}

.cta-description {
  font-size: 1.25rem;
  color: #6b7280;
  line-height: 1.6;
  margin-bottom: 3rem;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s ease forwards;
  animation-delay: 0.2s;
}

@media (prefers-color-scheme: dark) {
  .cta-description {
    color: rgba(255, 255, 255, 0.8);
  }
}

.brand-highlight {
  color: #16a34a;
  font-weight: 600;
}

.cta-buttons {
  display: flex;
  gap: 1.5rem;
  margin-bottom: 3rem;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s ease forwards;
  animation-delay: 0.4s;
}

.primary-btn,
.secondary-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 1rem 2rem;
  font-weight: 600;
  font-size: 1.1rem;
  border-radius: 16px;
  text-decoration: none;
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}

.primary-btn {
  background: linear-gradient(135deg, #16a34a, #15803d);
  color: #fff;
  box-shadow: 0 8px 24px rgba(22, 163, 74, 0.3);
}

.primary-btn:hover {
  transform: translateY(-4px) scale(1.02);
  box-shadow: 0 16px 32px rgba(22, 163, 74, 0.4);
}

.secondary-btn {
  background: rgba(0, 0, 0, 0.05);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(0, 0, 0, 0.1);
  color: #1f2937;
}

.secondary-btn:hover {
  transform: translateY(-4px) scale(1.02);
  border-color: rgba(22, 163, 74, 0.3);
  color: #16a34a;
  background: rgba(0, 0, 0, 0.1);
}

@media (prefers-color-scheme: dark) {
  .secondary-btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: rgba(255, 255, 255, 0.1);
    color: #fff;
  }
  .secondary-btn:hover {
    background: rgba(255, 255, 255, 0.1);
    color: #22c55e;
  }
}

.btn-content {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  position: relative;
  z-index: 2;
}

.btn-icon {
  width: 1.25rem;
  height: 1.25rem;
  transition: transform 0.3s ease;
}

.primary-btn:hover .btn-icon {
  transform: translateX(4px);
}

.secondary-btn:hover .btn-icon {
  transform: scale(1.1);
}

.btn-shine {
  position: absolute;
  inset: 0;
  border-radius: 16px;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  opacity: 0;
  transition: opacity 0.5s ease;
}

.primary-btn:hover .btn-shine {
  opacity: 1;
  animation: buttonShine 1s ease;
}

.trust-indicators {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s ease forwards;
  animation-delay: 0.6s;
}

.trust-item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  color: #6b7280;
  font-size: 0.9rem;
  font-weight: 500;
}

@media (prefers-color-scheme: dark) {
  .trust-item {
    color: rgba(255, 255, 255, 0.7);
  }
}

.trust-icon {
  width: 1.25rem;
  height: 1.25rem;
  color: #16a34a;
}

.cta-visual {
  position: relative;
  height: 500px;
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 0.8s ease forwards;
  animation-delay: 0.4s;
}

.success-visualization {
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(22, 163, 74, 0.1));
  border-radius: 20px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(20px);
  position: relative;
  overflow: hidden;
}

@media (prefers-color-scheme: dark) {
  .success-visualization {
    border-color: rgba(255, 255, 255, 0.1);
  }
}

.viz-bg {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.viz-svg {
  width: 90%;
  height: 90%;
  opacity: 0.9;
}

.success-path {
  transition: all 0.4s ease;
  stroke-dasharray: 5, 5;
}

.success-path.active {
  stroke-dasharray: 10, 5;
  animation: pathDash 3s ease-in-out infinite;
}

.achievement-node {
  transition: all 0.4s ease;
  cursor: pointer;
}

.achievement-node.active {
  animation: nodePulse 2s ease-in-out infinite;
}

.achievement-icon {
  pointer-events: none;
  transition: all 0.3s ease;
}

.success-wave {
  animation: waveRipple 2.5s ease-out infinite;
}

.success-overlay {
  position: absolute;
  inset: 0;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 2rem;
}

.success-metrics {
  display: flex;
  justify-content: space-between;
  gap: 1rem;
}

.metric-item {
  background: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 12px;
  padding: 1rem;
  text-align: center;
  opacity: 0.8;
  transition: all 0.3s ease;
}

.metric-item.active {
  opacity: 1;
  border-color: #16a34a;
  box-shadow: 0 0 20px rgba(22, 163, 74, 0.3);
  transform: scale(1.05);
}

.metric-value {
  font-size: 1.8rem;
  font-weight: bold;
  color: #16a34a;
}

.metric-label {
  font-size: 0.75rem;
  color: #6b7280;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

@media (prefers-color-scheme: dark) {
  .metric-label {
    color: rgba(255, 255, 255, 0.7);
  }
}

.central-cta-indicator {
  position: absolute;
  bottom: 2rem;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  align-items: center;
  justify-content: center;
}

.cta-indicator-ring {
  width: 90px;
  height: 90px;
  border: 2px solid rgba(22, 163, 74, 0.4);
  border-radius: 50%;
  position: absolute;
  animation: indicatorRotate 8s linear infinite;
}

.cta-indicator-ring::before {
  content: "";
  position: absolute;
  top: -3px;
  left: 50%;
  width: 6px;
  height: 6px;
  background: #16a34a;
  border-radius: 50%;
  transform: translateX(-50%);
  box-shadow: 0 0 12px #16a34a;
}

.cta-indicator-core {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, rgba(34, 197, 94, 0.3), rgba(22, 163, 74, 0.2));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  backdrop-filter: blur(10px);
  border: 2px solid rgba(22, 163, 74, 0.3);
  animation: indicatorPulse 3s ease-in-out infinite;
}

.cta-indicator-text {
  font-size: 0.65rem;
}


</style>