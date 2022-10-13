import { resolve } from 'path'
import { defineConfig } from 'vite'
// import vue from '@vitejs/plugin-vue'
import laravel from 'vite-plugin-laravel'

export default defineConfig({
	build: {
		lib: {
		  entry: resolve(__dirname, 'resources/js/vui-kit.js'),
		  name: 'VuiKit',
		  fileName: (format) => `vui-kit.${format}.js`
		},
	},
	plugins: [
		// vue(),
		// laravel()
	]
})