<template>
  <section class="benefits" id="benefits">
    <!-- Top fade overlay -->
    <div class="fade-overlay fade-top"></div>

    <div class="container">
      <div class="benefits-content">
        <div class="benefits-text">
          <h2 ref="title" class="animate-title">Transform Your Risk Management Approach</h2>
          <ul class="benefits-list">
            <li
              v-for="(benefit, index) in benefits"
              :key="index"
              :ref="el => benefitRefs[index] = el"
              class="benefit-item"
              :style="{ animationDelay: `${0.2 + index * 0.2}s` }"
              @mouseenter="onBenefitHover(index)"
              @mouseleave="onBenefitLeave(index)"
            >
              <span class="check-icon">✓</span>
              <div class="benefit-text">
                <h4>{{ benefit.title }}</h4>
                <p>{{ benefit.description }}</p>
              </div>
            </li>
          </ul>
        </div>

        <div class="benefits-visual" ref="visualContainer">
          <div class="risk-map">
            <div class="network-bg">
              <svg class="network-svg" viewBox="0 0 400 400">
                <!-- Animated network connections -->
                <defs>
                  <linearGradient id="connectionGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" :style="{ stopColor: activeColor, stopOpacity: 0.8 }" />
                    <stop offset="100%" :style="{ stopColor: secondaryColor, stopOpacity: 0.4 }" />
                  </linearGradient>
                  <filter id="glow">
                    <feGaussianBlur stdDeviation="3" result="coloredBlur"/>
                    <feMerge>
                      <feMergeNode in="coloredBlur"/>
                      <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                  </filter>
                </defs>

                <!-- Connection lines -->
                <g class="connections">
                  <line
                    v-for="(connection, index) in connections"
                    :key="`line-${index}`"
                    :x1="connection.x1"
                    :y1="connection.y1"
                    :x2="connection.x2"
                    :y2="connection.y2"
                    stroke="url(#connectionGrad)"
                    :stroke-width="connection.active ? 2 : 1"
                    :opacity="connection.active ? 0.8 : 0.3"
                    class="connection-line"
                    :class="{ active: connection.active }"
                  />
                </g>

                <!-- Network nodes -->
                <g class="nodes">
                  <circle
                    v-for="(node, index) in nodes"
                    :key="`node-${index}`"
                    :cx="node.x"
                    :cy="node.y"
                    :r="node.active ? node.radius * 1.2 : node.radius"
                    :fill="node.active ? activeColor : node.color"
                    :opacity="node.active ? 1 : 0.7"
                    class="network-node"
                    :class="{
                      active: node.active,
                      critical: node.type === 'critical',
                      warning: node.type === 'warning',
                      safe: node.type === 'safe'
                    }"
                    filter="url(#glow)"
                  />
                </g>

                <!-- Pulse rings -->
                <g class="pulse-rings">
                  <circle
                    v-for="(pulse, index) in pulses"
                    :key="`pulse-${index}`"
                    :cx="pulse.x"
                    :cy="pulse.y"
                    :r="pulse.radius"
                    fill="none"
                    :stroke="pulse.color"
                    :stroke-width="pulse.width"
                    :opacity="pulse.opacity"
                    class="pulse-ring"
                  />
                </g>
              </svg>
            </div>

            <div class="risk-overlay">
              <div class="risk-stats">
                <div class="stat-item" :class="{ active: activeStatIndex === 0 }">
                  <div class="stat-value">{{ animatedStats.disruptions }}%</div>
                  <div class="stat-label">Risk Reduction</div>
                </div>
                <div class="stat-item" :class="{ active: activeStatIndex === 1 }">
                  <div class="stat-value">{{ animatedStats.accuracy }}%</div>
                  <div class="stat-label">Accuracy Boost</div>
                </div>
                <div class="stat-item" :class="{ active: activeStatIndex === 2 }">
                  <div class="stat-value">{{ animatedStats.recovery }}x</div>
                  <div class="stat-label">Faster Recovery</div>
                </div>
              </div>

              <div class="central-indicator">
                <div class="indicator-ring"></div>
                <div class="indicator-core">
                  <span class="indicator-text">RISK MAP</span>
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
const benefitRefs = ref([])

const benefits = ref([
  {
    title: 'Reduce Business Disruptions by 60%',
    description: 'Identify and mitigate risks before they cascade through your interconnected systems'
  },
  {
    title: 'Improve Risk Assessment Accuracy',
    description: 'See the complete picture of how risks propagate through your business ecosystem'
  },
  {
    title: 'Accelerate Recovery Times',
    description: 'Plan effective responses based on true system dependencies and critical paths'
  },
  {
    title: 'Enhance Compliance Confidence',
    description: 'Demonstrate comprehensive risk management with detailed dependency documentation'
  },
  {
    title: 'Optimize Resource Allocation',
    description: 'Focus investments on the most critical dependencies and highest-impact risks'
  }
])

const activeColor = ref('#16a34a')
const secondaryColor = ref('#15803d')
const activeStatIndex = ref(0)

const animatedStats = reactive({
  disruptions: 0,
  accuracy: 0,
  recovery: 0
})

// Network visualization data
const nodes = ref([
  { x: 200, y: 200, radius: 12, color: '#16a34a', type: 'critical', active: false },
  { x: 120, y: 120, radius: 8, color: '#22c55e', type: 'safe', active: false },
  { x: 280, y: 120, radius: 8, color: '#22c55e', type: 'safe', active: false },
  { x: 120, y: 280, radius: 10, color: '#f59e0b', type: 'warning', active: false },
  { x: 280, y: 280, radius: 8, color: '#22c55e', type: 'safe', active: false },
  { x: 60, y: 200, radius: 6, color: '#22c55e', type: 'safe', active: false },
  { x: 340, y: 200, radius: 6, color: '#22c55e', type: 'safe', active: false },
  { x: 200, y: 60, radius: 6, color: '#22c55e', type: 'safe', active: false },
  { x: 200, y: 340, radius: 6, color: '#22c55e', type: 'safe', active: false }
])

const connections = ref([
  { x1: 200, y1: 200, x2: 120, y2: 120, active: false },
  { x1: 200, y1: 200, x2: 280, y2: 120, active: false },
  { x1: 200, y1: 200, x2: 120, y2: 280, active: false },
  { x1: 200, y1: 200, x2: 280, y2: 280, active: false },
  { x1: 120, y1: 120, x2: 60, y2: 200, active: false },
  { x1: 280, y1: 120, x2: 340, y2: 200, active: false },
  { x1: 200, y1: 200, x2: 200, y2: 60, active: false },
  { x1: 200, y1: 200, x2: 200, y2: 340, active: false }
])

const pulses = ref([])

let animationInterval
let pulseInterval
let statsInterval

const animateStats = () => {
  const targets = [60, 85, 3]
  const keys = ['disruptions', 'accuracy', 'recovery']

  keys.forEach((key, index) => {
    let current = 0
    const target = targets[index]
    const increment = target / 60 // Animate over ~2 seconds at 30fps

    const animate = () => {
      if (current < target) {
        current += increment
        animatedStats[key] = Math.floor(current)
        setTimeout(animate, 33)
      } else {
        animatedStats[key] = target
      }
    }

    setTimeout(animate, index * 200)
  })
}

const createPulse = (x, y) => {
  const id = Date.now() + Math.random()
  pulses.value.push({
    id,
    x,
    y,
    radius: 0,
    opacity: 1,
    color: activeColor.value,
    width: 2
  })

  const animatePulse = () => {
    const pulse = pulses.value.find(p => p.id === id)
    if (!pulse) return

    pulse.radius += 2
    pulse.opacity = Math.max(0, 1 - (pulse.radius / 50))
    pulse.width = Math.max(0.5, 2 - (pulse.radius / 25))

    if (pulse.radius < 50) {
      requestAnimationFrame(animatePulse)
    } else {
      pulses.value = pulses.value.filter(p => p.id !== id)
    }
  }

  requestAnimationFrame(animatePulse)
}

const animateNetwork = () => {
  // Randomly activate nodes and connections
  nodes.value.forEach((node, index) => {
    if (Math.random() < 0.1) {
      node.active = !node.active
      if (node.active) {
        createPulse(node.x, node.y)
      }
    }
  })

  connections.value.forEach(connection => {
    if (Math.random() < 0.15) {
      connection.active = !connection.active
    }
  })

  // Cycle through stats
  activeStatIndex.value = (activeStatIndex.value + 1) % 3
}

const onBenefitHover = (index) => {
  // Highlight corresponding network elements
  const nodeIndex = index % nodes.value.length
  nodes.value[nodeIndex].active = true
  createPulse(nodes.value[nodeIndex].x, nodes.value[nodeIndex].y)
}

const onBenefitLeave = (index) => {
  const nodeIndex = index % nodes.value.length
  nodes.value[nodeIndex].active = false
}

onMounted(() => {
  // Start animations
  setTimeout(animateStats, 1000)

  animationInterval = setInterval(animateNetwork, 2000)

  // Initial network activation
  setTimeout(() => {
    nodes.value[0].active = true
    createPulse(200, 200)
  }, 1500)
})

onUnmounted(() => {
  if (animationInterval) clearInterval(animationInterval)
  if (pulseInterval) clearInterval(pulseInterval)
  if (statsInterval) clearInterval(statsInterval)
})
</script>

<style scoped>
.benefits {
  padding: 120px 0;
  background: white;
  position: relative;
  overflow: hidden;
}

@media (prefers-color-scheme: dark) {
  .benefits {
    background: #0f172a;
  }
}

.benefits::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background:
    radial-gradient(circle at 20% 80%, rgba(59, 130, 246, 0.2) 0%, transparent 50%),
    radial-gradient(circle at 80% 20%, rgba(99, 102, 241, 0.2) 0%, transparent 50%),
    radial-gradient(circle at 40% 40%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
  pointer-events: none;
}

@media (prefers-color-scheme: dark) {
  .benefits::before {
    background:
      radial-gradient(circle at 20% 80%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
      radial-gradient(circle at 80% 20%, rgba(99, 102, 241, 0.1) 0%, transparent 50%),
      radial-gradient(circle at 40% 40%, rgba(139, 92, 246, 0.05) 0%, transparent 50%);
  }
}

/* Fade overlay effects */
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
  background: linear-gradient(to bottom,
    #f8fafc 0%,
    rgba(248, 250, 252, 0.95) 20%,
    rgba(248, 250, 252, 0.8) 40%,
    rgba(248, 250, 252, 0.5) 60%,
    rgba(248, 250, 252, 0.2) 80%,
    transparent 100%
  );
}

.fade-bottom {
  bottom: 0;
  background: linear-gradient(to top,
    #f8fafc 0%,
    rgba(248, 250, 252, 0.95) 20%,
    rgba(248, 250, 252, 0.8) 40%,
    rgba(248, 250, 252, 0.5) 60%,
    rgba(248, 250, 252, 0.2) 80%,
    transparent 100%
  );
}

@media (prefers-color-scheme: dark) {
  .fade-top {
    background: linear-gradient(to bottom,
      #0f172a 0%,
      rgba(15, 23, 42, 0.95) 20%,
      rgba(15, 23, 42, 0.8) 40%,
      rgba(15, 23, 42, 0.5) 60%,
      rgba(15, 23, 42, 0.2) 80%,
      transparent 100%
    );
  }

  .fade-bottom {
    background: linear-gradient(to top,
      #0f172a 0%,
      rgba(15, 23, 42, 0.95) 20%,
      rgba(15, 23, 42, 0.8) 40%,
      rgba(15, 23, 42, 0.5) 60%,
      rgba(15, 23, 42, 0.2) 80%,
      transparent 100%
    );
  }
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
  position: relative;
  z-index: 1;
}

.benefits-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
}

.animate-title {
  font-size: 3.5rem;
  font-weight: 700;
  margin-bottom: 3rem;
  background: linear-gradient(135deg, #1f2937 0%, #16a34a 50%, #15803d 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1.2;
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 0.8s ease-out forwards;
}

@media (prefers-color-scheme: dark) {
  .animate-title {
    background: linear-gradient(135deg, #fff 0%, #22c55e 50%, #16a34a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
}

.benefits-list {
  list-style: none;
}

.benefit-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 2.5rem;
  padding: 1.5rem;
  border-radius: 16px;
  background: rgba(0, 0, 0, 0.02);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(0, 0, 0, 0.1);
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  opacity: 0;
  transform: translateX(-30px);
  animation: slideInLeft 0.6s ease-out forwards;
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

@media (prefers-color-scheme: dark) {
  .benefit-item {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.1);
  }
}

.benefit-item::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(0, 0, 0, 0.05), transparent);
  transition: left 0.6s ease;
}

@media (prefers-color-scheme: dark) {
  .benefit-item::before {
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
  }
}

.benefit-item:hover {
  transform: translateY(-8px) translateX(0);
  background: rgba(0, 0, 0, 0.05);
  border-color: rgba(34, 197, 94, 0.3);
  box-shadow: 0 20px 40px rgba(34, 197, 94, 0.1);
}

@media (prefers-color-scheme: dark) {
  .benefit-item:hover {
    background: rgba(255, 255, 255, 0.05);
    border-color: rgba(34, 197, 94, 0.3);
    box-shadow: 0 20px 40px rgba(34, 197, 94, 0.1);
  }
}

.benefit-item:hover::before {
  left: 100%;
}

.check-icon {
  width: 32px;
  height: 32px;
  background: linear-gradient(135deg, #16a34a, #15803d);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 1.5rem;
  font-size: 1.2rem;
  font-weight: bold;
  flex-shrink: 0;
  box-shadow: 0 8px 16px rgba(22, 163, 74, 0.3);
  color: white;
}

.benefit-text h4 {
  font-size: 1.3rem;
  font-weight: 600;
  margin-bottom: 0.5rem;
  color: #1f2937;
}

@media (prefers-color-scheme: dark) {
  .benefit-text h4 {
    color: #ffffff;
  }
}

.benefit-text p {
  color: #6b7280;
  font-size: 1rem;
  line-height: 1.5;
}

@media (prefers-color-scheme: dark) {
  .benefit-text p {
    color: rgba(255, 255, 255, 0.7);
  }
}

.benefits-visual {
  position: relative;
  height: 500px;
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 0.8s ease-out 0.4s forwards;
}

.risk-map {
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(34, 197, 94, 0.1) 0%, rgba(22, 163, 74, 0.1) 100%);
  border-radius: 20px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(20px);
  position: relative;
  overflow: hidden;
}

@media (prefers-color-scheme: dark) {
  .risk-map {
    background: linear-gradient(135deg, rgba(34, 197, 94, 0.1) 0%, rgba(22, 163, 74, 0.1) 100%);
    border: 1px solid rgba(255, 255, 255, 0.1);
  }
}

.network-bg {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.network-svg {
  width: 80%;
  height: 80%;
  opacity: 0.8;
}

.connection-line {
  transition: all 0.3s ease;
}

.connection-line.active {
  animation: pulse 2s ease-in-out infinite;
}

.network-node {
  transition: all 0.3s ease;
  cursor: pointer;
}

.network-node.active {
  animation: nodeGlow 2s ease-in-out infinite;
}

.network-node.critical {
  filter: drop-shadow(0 0 8px #16a34a);
}

.network-node.warning {
  filter: drop-shadow(0 0 8px #f59e0b);
}

.network-node.safe {
  filter: drop-shadow(0 0 4px #22c55e);
}

.pulse-ring {
  animation: expand 2s ease-out infinite;
}

.risk-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 2rem;
}

.risk-stats {
  display: flex;
  justify-content: space-between;
  gap: 1rem;
}

.stat-item {
  background: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 12px;
  padding: 1rem;
  text-align: center;
  transition: all 0.3s ease;
  opacity: 0.7;
}

@media (prefers-color-scheme: dark) {
  .stat-item {
    background: rgba(0, 0, 0, 0.3);
    border: 1px solid rgba(255, 255, 255, 0.1);
  }
}

.stat-item.active {
  opacity: 1;
  border-color: #16a34a;
  box-shadow: 0 0 20px rgba(22, 163, 74, 0.3);
}

.stat-value {
  font-size: 1.8rem;
  font-weight: bold;
  color: #16a34a;
  margin-bottom: 0.25rem;
}

.stat-label {
  font-size: 0.75rem;
  color: #6b7280;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

@media (prefers-color-scheme: dark) {
  .stat-label {
    color: rgba(255, 255, 255, 0.7);
  }
}

.central-indicator {
  position: absolute;
  bottom: 2rem;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  align-items: center;
  justify-content: center;
}

.indicator-ring {
  width: 80px;
  height: 80px;
  border: 2px solid rgba(22, 163, 74, 0.3);
  border-radius: 50%;
  position: absolute;
  animation: rotate 10s linear infinite;
}

.indicator-ring::before {
  content: '';
  position: absolute;
  top: -2px;
  left: 50%;
  width: 4px;
  height: 4px;
  background: #16a34a;
  border-radius: 50%;
  transform: translateX(-50%);
  box-shadow: 0 0 10px #16a34a;
}

.indicator-core {
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, rgba(34, 197, 94, 0.2), rgba(22, 163, 74, 0.2));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(0, 0, 0, 0.2);
}

@media (prefers-color-scheme: dark) {
  .indicator-core {
    border: 1px solid rgba(255, 255, 255, 0.2);
  }
}

.indicator-text {
  font-size: 0.6rem;
  font-weight: bold;
  color: #16a34a;
  text-align: center;
  letter-spacing: 1px;
}

@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes slideInLeft {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes pulse {
  0%, 100% { opacity: 0.3; }
  50% { opacity: 1; }
}

@keyframes nodeGlow {
  0%, 100% { filter: drop-shadow(0 0 8px currentColor); }
  50% { filter: drop-shadow(0 0 16px currentColor); }
}

@keyframes expand {
  0% {
    transform: scale(0);
    opacity: 1;
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}

@keyframes rotate {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}

@media (max-width: 768px) {
  .benefits-content {
    grid-template-columns: 1fr;
    gap: 40px;
  }

  .animate-title {
    font-size: 2.5rem;
  }

  .benefits-visual {
    height: 400px;
  }

  .risk-stats {
    flex-direction: column;
    gap: 0.5rem;
  }

  .stat-item {
    padding: 0.75rem;
  }

  .fade-overlay {
    height: 60px;
  }
}
</style>
