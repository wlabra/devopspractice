# 🚀 Brújula del DevOps Novato: De Zero a Infrastructure-as-Code

Este repositorio contiene la configuración base para un entorno DevOps automatizado.

## 1. El Cimiento: Contenedores (Docker) 🐳
- **Docker Compose:** Orquestación de servicios.
- **Comandos Clave:**
  - `docker compose up -d`: Levantar infraestructura.
  - `docker compose logs -f`: Ver qué está pasando "bajo el capó".

## 2. El Centinela: Observabilidad 📊
- **Netdata:** Monitoreo en tiempo real en el puerto `19999`.
- **Estrategia:** Si algo falla, lo primero es mirar las métricas.

## 3. El Conserje: Reverse Proxy (Nginx) 🌐
- Gestión de dominios locales (`devops.local`, `monitor.local`) mediante el puerto 80.
- **DNS:** Configurado en `/etc/hosts` de la máquina cliente.

## 4. La Inteligencia: VS Code & Linter 🧠
- Desarrollo mediante **Remote-SSH**.
- Uso de **ansible-lint** para asegurar que el código no solo funcione, sino que sea de calidad profesional.

## 5. El Superpoder: Ansible (IaC) 🤖
- **Idempotencia:** Capacidad de ejecutar el mismo playbook sin efectos secundarios.
- **FQCN:** Uso de nombres de módulos completos (ej: `ansible.builtin.apt`).

---
*Guía generada durante el laboratorio de aprendizaje DevOps 2026.*