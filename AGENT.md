# Qwen Code 的项目上下文

## 项目概述

这个项目 `amis_php` 是一个 PHP 库，旨在为 [Baidu AMIS](https://github.com/baidu/amis) 低代码前端框架生成 JSON Schema。其核心思想是使用 PHP 类来构建 AMIS 渲染器用来渲染动态网页所消费的复杂 `schema` 对象。这使得开发者在构建 AMIS 页面时可以利用 PHP 的类型安全和 IDE 功能。

*   **主要技术:** PHP 8.x
*   **核心库:** Baidu AMIS (根据最新脚本，版本为 6.13.0)
*   **架构:**
    *   它使用官方的 AMIS `schema.json` 文件（通过 `get_schema.php` 获取）作为所有可用 AMIS 组件及其属性的源定义。
    *   构建过程 (`build.php`) 会解析这个 `schema.json`，识别组件定义（通常是使用 `allOf` 进行继承的），并使用自定义的 PHP 代码生成逻辑 (`src/Build/*`) 为 `src/Renderer2/` 目录中的相应 PHP 类创建对应的代码。这些生成的类直接映射到 AMIS schema 定义，并为配置组件属性提供流畅的 setter 方法。
    *   所有生成组件的基类是 `AmisPhp\BaseSchema`，它处理通用属性和设置属性的魔术方法。
    *   然后，开发人员使用这些生成的 PHP 类（例如 `new \AmisPhp\Renderer2\Page()`）在 PHP 中构建 schema 结构，然后将其转换为 JSON 并传递给浏览器中的 AMIS JavaScript 渲染器。

## 关键目录和文件

*   `src/`: 包含核心 PHP 源代码。
    *   `Build/`: 用于解析 `schema.json` 并生成 PHP 类的逻辑。
    *   `Renderer2/`: 代码生成过程将自动生成的 PHP 组件类放置到的输出目录。
    *   `BaseSchema.php`: 所有生成的组件类继承的基类。
    *   `Build.php`: 负责协调从 schema 定义生成单个组件类的主要类。

*   `composer.json`: 定义依赖项（如 `symfony/console`, `symfony/finder`）和项目脚本。
*   `schema.json`: 官方的 AMIS schema 定义文件（由 `get_schema.php` 下载）。
*   `jssdk/`: 包含 AMIS JavaScript/CSS 资源的目录（由 `get_sdk.php` 下载）。
*   `index.php`: 一个基本的入口点，目前只显示 `phpinfo()`。
*   `build.php`: 运行代码生成过程的主要脚本。
*   `get_schema.php`: 从 AMIS GitHub 发布页面下载最新 `schema.json` 文件的脚本。
*   `get_sdk.php`: 下载最新 AMIS JavaScript SDK (`jssdk.tar.gz`) 的脚本。

## 构建和运行

1.  **安装依赖:** 运行 `composer install`。
2.  **获取 AMIS Schema:** 运行 `composer run get_schema` 下载 `schema.json` 文件。
3.  **获取 AMIS SDK:** 运行 `composer run get_sdk` 下载并解压 AMIS JavaScript/CSS 文件到 `jssdk/` 目录。
4.  **生成 PHP 类:** 运行 `composer run build` 解析 `schema.json` 并生成 `src/Renderer2/` 中的 PHP 组件类。


## 开发约定

*   **代码生成:** 主要的开发任务包括维护和运行代码生成脚本 (`build.php`, `src/Build/*`) 以使 PHP 类与上游 AMIS schema 保持同步。
*   **组件使用:** 在手动编码时，开发人员实例化并配置 `AmisPhp\Renderer2\` 下的自动生成类。这些类使用流畅的接口（从 setter 方法返回 `$this`）以便于使用。
*   **基类:** 所有组件类都应该扩展 `AmisPhp\BaseSchema`，它提供基本属性和动态属性处理。