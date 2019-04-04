# Check of MiaoSiLa

一个作用于 Missevan 相关项目的第三方代码检查器，需前置官方标定的检查器，方可启用。

## 检测支持

官方：支持 PHP、HTML、JS、ES 检测，HTML 会协同检测文件内的样式。

第三方：目前支持 PHP（官方检测器的补充件）

## 使用

1\. 将本项目的根路径加入 `PATH`；

按 Tab 自动补全：

 - 1. Windows 环境下启动 `Git Bash` 或其他 `bash` 终端；Linux 环境下直接启动终端
 - 2. 将以下内容加入 `~/.bashrc` 文件：

```shell
# Missevan code check tool
checkPath=/home/uiosun/Appliction/Code/check
export PATH=${PATH}:${checkPath}

# get check project filename, and create list to complete.
files=$(ls ${checkPath}/run_file)
complete -W "${files/test.example/}" run
```

*后续建立文件后，在终端输入 `run `（注意：带空格），按 `Tab` 有自动补全*

2\. 在本项目的 *run_file* 目录创建文件，仿照 `test.example` 增加文件，内置项目目录即可。

支持检查器：

 - php：PHPLint + 补充检查脚本
 - html / php(views)：HTMLLint
 - js / php(views)：ESLint to JavaScript
 - es：ESLint to ECMAScriptX file suffix type
 - ~~esTest：Mocha test package~~

在 **Bash 终端**中，运行 `run 文件名` 命令。

本项目依赖的命令补全、shell 脚本等内容，均以 Bash 为基准，其他终端可能出现未知问题。
