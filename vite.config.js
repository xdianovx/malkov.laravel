import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import sassGlobImports from "vite-plugin-sass-glob-import";

export default defineConfig({
  plugins: [
    sassGlobImports(),
    laravel({
      input: ["resources/css/app.scss", "resources/js/app.js"],
      refresh: true,
    }),
  ],
  css: {
    preprocessorOptions: {
      scss: {},
    },
  },
});
