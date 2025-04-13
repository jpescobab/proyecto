SELECT 
    YEAR(Fecha) AS anio,
    MONTH(Fecha) AS mes,
    COUNT(*) AS cantidadDtes,
    SUM(Monto) AS totalMonto
FROM dtes
GROUP BY YEAR(Fecha), MONTH(Fecha)
ORDER BY anio DESC, mes DESC;
