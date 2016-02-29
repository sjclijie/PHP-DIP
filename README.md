
#### 依赖倒置原则( Dependence Inversion Principle, DIP )
DIP是一种软件设计的指导思想,传统的软件设计中,上层代码依赖下层代码, 当下层代码出现变动时,上层代码也要相应变化,
维护成本高. 而DIP的核心思想是上层定义接口, 下层实现接口, 从而使下层依赖于上层, 降低耦合度, 提高整个系统的弹性.
这是一种经实践证明的有效的策略.


#### 控制反转（Inversion of Control, IoC）
Ioc就是DIP的一种具体思路, DIP只是一个概念,思想, 而IoC是一种实现DIP的方法.  IoC的核心是将类（上层）所依赖的单元（下层）
的实例化过程交给由第三方来实现. 一个简答的特征, 就是类中不对依赖的单元有如: $component = new yii\component\SomeClass()
的实例化语句


#### 依赖注入（ Dependence Injection, DI ）
DI是IoC的一种设计模式,是一种套路,按照DI的思路,就可以实现IoC, 就能符合DIP原则, DI的核心是把类所依赖的单元的实例化过程,放到类外面去实现


####  控制反转容器（IoC Container）
当项目比较大时,依赖关系可能会比较复杂,而IoC Container提供了动态创建,注入依赖单元, 映射关系等功能, 减少了许多代码量
Yii设计了一个yii\di\Container来实现DI Container


#### 服务定位器（Service Locator）
Service Locator是Ioc的另一种实现方式, 其核心是把所以可能用到的依赖单元交由Service Locator进行实例化和创建,配置,  把类
对依赖单元的依赖, 转变成类对Service Locator的依赖. DI与Service Locator并不冲突, 两者可以结合使用.