/** @type {import('rollup').RollupOptions} */
import { join, resolve } from 'path'
import { defineConfig } from 'vite'
import { RollupOptions } from "rollup";
// import vue from '@vitejs/plugin-vue'
import laravel from 'vite-plugin-laravel'

export default defineConfig({
	// root: join(__dirname, "src"),
	build: {
		outDir: join(__dirname, 'dist'),
		lib: {
		  entry: resolve(__dirname, 'resources/js/vui-kit.js'),
		  name: 'VuiKit',
		  fileName: (format) => `vui-kit.${format}.js`
		},
		rollupOptions: {
			output: {
			  	assetFileNames: (assetInfo) => {
					if (assetInfo.name === 'style.css') return 'vui-kit.css';
					return assetInfo.name;
				  },
			},
		}
	},
	plugins: [
		// laravel()
		// vue(),
	]
})