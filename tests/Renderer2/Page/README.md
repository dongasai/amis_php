# Page 组件测试用例与网站演示对应关系

本文档维护了 `tests/Renderer2/Page` 目录下的本地测试用例与 [AMIS Page 组件网站演示](https://aisuda.bce.baidu.com/amis/zh-CN/components/page) 的对应关系。

## 已实现的测试用例

| 网站演示标题 | 本地测试文件 | 说明 |
|-------------|-------------|------|
| 基本用法 | [SimplePageTest.php](SimplePageTest.php) | 测试简单的页面配置，包含标题和内容 |
| 渲染组件 | [ComplexPageTest.php](ComplexPageTest.php) | 测试包含表单和文本输入控件的复杂页面配置 |
| 在其他区域渲染组件 | [RenderInOtherAreasTest.php](RenderInOtherAreasTest.php) | 测试在页面的侧边栏、工具栏和内容区渲染组件 |
| 页面初始化请求 | [PageInitRequestTest.php](PageInitRequestTest.php) | 测试配置 initApi 在页面初始化时请求数据 |
| 轮询初始化接口 | [PollingInitApiTest.php](PollingInitApiTest.php) | 测试配置 initApi 和 interval 实现轮询初始化接口 |
| 配置 stopAutoRefreshWhen 表达式 | [StopAutoRefreshWhenTest.php](StopAutoRefreshWhenTest.php) | 测试配置 stopAutoRefreshWhen 表达式，当满足条件时停止轮询 |
| 下拉刷新 | [PullRefreshTest.php](PullRefreshTest.php) | 测试配置下拉刷新功能 |

## 待实现的测试用例

目前所有网站演示示例均已创建对应的本地测试用例。

## 测试文件命名规范

每个测试文件都遵循以下规范：
- 文件名采用驼峰命名法，与测试的网站示例标题相对应
- 每个文件只测试一个特定的功能点
- 测试类的注释（类注释）明确说明了测试的目的和对应的网站示例
- 每个测试方法都包含对应的 JSON 配置注释，方便与网站示例进行对比

## 运行测试

要运行这些测试，可以在项目根目录下执行：

```bash
composer install
./vendor/bin/phpunit tests/Renderer2/Page