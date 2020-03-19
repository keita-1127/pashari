module.exports = {
    root: true,
    parserOptions: {
        parser: 'babel-eslint',
    },
    env: {
        browser: true,
    },
    extends: [
        'standard',
        'plugin:vue/recommended',
        'plugin:prettier/recommended',
        'prettier/vue',
    ],
    plugins: [
        'vue',
        'prettier', // prettierをESLintと併用します
    ],
    rules: {
        // ESLintが使用する整形ルールのうち、自分がoffにしたいルールなどを指定する
        'vue/no-v-html': 'off', // v-htmlの使用について

        // この先はPrettierのルール
        "prettier/prettier": [
            "error",
            {
                printWidth: 130,
                tabWidth: 2,
                useTabs: false,
                semi: true,
                singleQuote: true,
                trailingComma: 'none',
                bracketSpacing: true,
                jsxBracketSameLine: true,
                arrowParens: 'avoid',
                filepath: undefined,
                requirePragma: false,
                insertPragma: false,
                proseWrap: 'preserve',
            },
        ]
    }
}

