# Three.js 点云可视化

这个项目提供了两个完整的 Three.js 点云可视化应用，支持多种点云类型和交互功能。

## 文件说明

### 1. `public/pointcloud.html` - 基础点云可视化器
- **功能**: 生成和显示各种类型的点云
- **特点**: 
  - 5种不同的点云类型（随机、球形、立方体、螺旋、波浪）
  - 4种颜色模式（彩虹色、高度色、距离色、统一色）
  - 可调节点数量和点大小
  - 实时动画效果
  - 性能统计显示

### 2. `public/pointcloud-loader.html` - 点云文件加载器
- **功能**: 加载和显示真实的点云文件
- **特点**:
  - 支持 PLY 格式文件
  - 文件上传和解析
  - 多种示例数据
  - 点云导出功能
  - 自动相机适配

## 使用方法

### 基础点云可视化器

1. 打开 `public/pointcloud.html`
2. 在右侧控制面板中选择：
   - **点云类型**: 选择要生成的点云形状
   - **点的数量**: 调节滑块设置点的数量（1000-50000）
   - **点的大小**: 调节滑块设置点的大小（1-10）
   - **颜色模式**: 选择颜色显示方式
3. 点击"生成点云"按钮
4. 使用鼠标控制视角：
   - 左键拖拽：旋转视角
   - 滚轮：缩放
   - 右键拖拽：平移

### 点云文件加载器

1. 打开 `public/pointcloud-loader.html`
2. 上传 PLY 格式的点云文件，或使用内置示例：
   - 点击"选择点云文件"上传文件
   - 或点击示例按钮（球形示例、立方体示例、螺旋示例）
3. 调整显示参数：
   - **点的大小**: 调节点的大小
   - **颜色模式**: 选择颜色显示方式
4. 使用鼠标控制视角
5. 可以导出当前点云为 PLY 格式

## 支持的 PLY 文件格式

应用支持标准的 PLY 文件格式，包括：

```
ply
format ascii 1.0
element vertex [点数]
property float x
property float y
property float z
property uchar red
property uchar green
property uchar blue
end_header
[x] [y] [z] [r] [g] [b]
...
```

## 技术特性

### 性能优化
- 使用 `BufferGeometry` 和 `BufferAttribute` 提高渲染性能
- 支持大量点云数据（最多 50,000 个点）
- 实时 FPS 监控

### 交互功能
- 轨道控制器（OrbitControls）提供完整的 3D 导航
- 自动相机适配点云边界
- 实时参数调节

### 视觉效果
- 多种颜色映射模式
- 透明度支持
- 动态光照
- 抗锯齿渲染

## 浏览器兼容性

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+

## 开发说明

### 依赖库
- Three.js r128
- OrbitControls
- Stats.js

### 主要功能模块

1. **点云生成器** (`generatePointCloud`)
   - 根据类型生成不同的点云数据
   - 支持随机、球形、立方体、螺旋、波浪等形状

2. **颜色映射器** (`setColor` / `setPointColor`)
   - 彩虹色：基于点的索引
   - 高度色：基于 Y 坐标
   - 距离色：基于到原点的距离
   - 统一色：固定颜色

3. **文件解析器** (`parsePointCloudFile`)
   - 解析 PLY 文件头
   - 提取顶点坐标和颜色信息
   - 支持进度显示

4. **相机控制器** (`resetCamera`)
   - 自动计算点云边界
   - 调整相机位置和视角

## 扩展功能

### 添加新的点云类型
在 `generatePointCloud` 函数中添加新的 case：

```javascript
case 'newType':
    generateNewTypePoints(positions, colors, pointCount, colorMode);
    break;
```

### 添加新的颜色模式
在 `setColor` 函数中添加新的 case：

```javascript
case 'newColorMode':
    // 新的颜色计算逻辑
    break;
```

### 支持更多文件格式
扩展 `parsePointCloudFile` 函数以支持其他格式（如 XYZ、PCD 等）。

## 故障排除

### 常见问题

1. **点云不显示**
   - 检查浏览器控制台是否有错误
   - 确认 Three.js 库已正确加载
   - 检查点云数据是否有效

2. **性能问题**
   - 减少点的数量
   - 降低点的大小
   - 关闭不必要的颜色模式

3. **文件加载失败**
   - 确认文件格式正确
   - 检查文件编码（应为 UTF-8）
   - 验证 PLY 文件头格式

### 调试技巧
- 使用浏览器开发者工具查看控制台输出
- 检查 FPS 显示了解性能状况
- 使用 `console.log` 调试点云数据

## 许可证

本项目使用 MIT 许可证，可自由使用和修改。