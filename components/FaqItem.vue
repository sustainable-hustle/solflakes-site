<template>
  <div class="pt-6">
    <dt class="text-lg">
      <!-- Expand/collapse question button -->
      <button type="button" class="text-left w-full flex justify-between items-start text-gray-400" @click="handleClick" aria-controls="faq-0" aria-expanded="false">
        <span class="font-medium text-gray-900">{{ question }}</span>
        <span class="ml-6 h-7 flex items-center">
          <svg
            :class="{
              'rotate-0': !open,
              'rotate-180': open,
            }"
            class="rotate-0 h-6 w-6 transform"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            aria-hidden="true"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>
      </button>
    </dt>
    <dd class="mt-2 pr-12" id="faq-0" v-show="open">
      <p class="text-base text-gray-500">
        {{ answer }}
      </p>
    </dd>
  </div>
</template>

<script>
  export default {
    props: ['question', 'answer'],
    data () {
      return {
        open: false,
      }
    },
    methods: {
      handleClick() {
        this.open = !this.open;
      }
    }
  }
</script>
