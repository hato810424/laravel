import { defineConfig } from 'vite';
import glob from 'glob';
import laravel from 'laravel-vite-plugin';
import autoprefixer from 'autoprefixer';

// 初期化
buildDir = '_vite';

// ファイル一覧取得
var files = [];
files = files.concat(glob.sync('resources/js/**/*.@(js)', {nodir: true}));
files = files.concat(glob.sync('resources/css/**/*.@(css|scss)', {nodir: true}));
console.log(files);

// 設定
export default defineConfig({
    plugins: [
        laravel({
            input: files,
            refresh: true,
        }),
    ],
    css: {
        postcss: {
            plugins: [autoprefixer],
        },
    },
    build: {
        manifest: true,
        sourcemap: false,
        outDir: 'public/' + buildDir,
        assetsDir: 'assets'
    },
    publicDir: 'public',
    server: {
        host: '127.0.0.1',
        port: 5173
    }
});
